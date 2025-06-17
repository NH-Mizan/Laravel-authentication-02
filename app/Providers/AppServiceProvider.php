<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use Cache;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
         view()->composer('*', function ($view) {

             $generalsetting = Cache::remember('generalsetting', now()->addDays(7), function () {
                return GeneralSetting::where('status', 1)->first();
            });
            $view->with([
            'generalsetting' => $generalsetting,
            ]);

         });

    }
    
}
