<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();



Route::group(['namespace' => 'Frontend', 'prefix' => 'frontend'], function () {
    Route::get('/', [FrontendController::class, 'index'])->name('home');
});


Route::group(['namespace' => 'Admin',  'prefix' => 'admin', 'middleware' => ['auth']], function () {
    Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
  

});
