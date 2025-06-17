<?php

namespace App\Providers;

use App\Models\GeneralSetting;
use App\Models\SocialMedia;
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

             $socialicons = Cache::remember('socialicons', now()->addDays(7), function () {
                return SocialMedia::where('status', 1)->get();
            });

            $view->with([
            'generalsetting' => $generalsetting,
            'socialicons' => $socialicons,
            ]);

         });

    }
    
}
