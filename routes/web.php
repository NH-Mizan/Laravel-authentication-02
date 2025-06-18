<?php
use App\Http\Controllers\admin\BannerCategoryController;
use App\Http\Controllers\admin\BannerController;
use App\Http\Controllers\admin\BrandController;
use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\ChildcategoryController;
use App\Http\Controllers\admin\ColorController;
use App\Http\Controllers\admin\ContactController;
use App\Http\Controllers\admin\GeneralSettingController;
use App\Http\Controllers\admin\SocialMediaController;
use App\Http\Controllers\admin\SubcategoryController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Frontend\FrontendController;

use App\Http\Controllers\Admin\UserController;



// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/cc', function () {
  Artisan::call('config:clear');
  Artisan::call('cache:clear');
  Artisan::call('route:clear');
  Artisan::call('view:clear');
  return "clear";
});

Auth::routes();



Route::group(['namespace' => 'Frontend'], function () {
  Route::get('/', [FrontendController::class, 'index'])->name('home');
  Route::get('brand/{slug}', [FrontendController::class, 'brand'])->name('brand');
});


Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => ['auth']], function () {
  Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');




  Route::get('users/manage', [UserController::class, 'index'])->name('users.index');
  Route::get('users/create', [UserController::class, 'create'])->name('users.create');
  Route::post('users/save', [UserController::class, 'store'])->name('users.store');
  Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
  Route::post('users/update', [UserController::class, 'update'])->name('users.update');
  Route::post('users/inactive', [UserController::class, 'inactive'])->name('users.inactive');
  Route::post('users/active', [UserController::class, 'active'])->name('users.active');
  Route::post('users/destroy', [UserController::class, 'destroy'])->name('users.destroy');


  // settings route
  Route::get('settings/manage', [GeneralSettingController::class, 'index'])->name('settings.index');
  Route::get('settings/create', [GeneralSettingController::class, 'create'])->name('settings.create');
  Route::post('settings/save', [GeneralSettingController::class, 'store'])->name('settings.store');
  Route::get('settings/{id}/edit', [GeneralSettingController::class, 'edit'])->name('settings.edit');
  Route::post('settings/update', [GeneralSettingController::class, 'update'])->name('settings.update');
  Route::post('settings/inactive', [GeneralSettingController::class, 'inactive'])->name('settings.inactive');
  Route::post('settings/active', [GeneralSettingController::class, 'active'])->name('settings.active');
  Route::post('settings/destroy', [GeneralSettingController::class, 'destroy'])->name('settings.destroy');



  // SocialMedia
  Route::get('social-media/manage', [SocialMediaController::class, 'index'])->name('socialmedias.index');
  Route::get('social-media/create', [SocialMediaController::class, 'create'])->name('socialmedias.create');
  Route::post('social-media/save', [SocialMediaController::class, 'store'])->name('socialmedias.store');
  Route::get('social-media/{id}/edit', [SocialMediaController::class, 'edit'])->name('socialmedias.edit');
  Route::post('social-media/update', [SocialMediaController::class, 'update'])->name('socialmedias.update');
  Route::post('social-media/inactive', [SocialMediaController::class, 'inactive'])->name('socialmedias.inactive');
  Route::post('social-media/active', [SocialMediaController::class, 'active'])->name('socialmedias.active');
  Route::post('social-media/destroy', [SocialMediaController::class, 'destroy'])->name('socialmedias.destroy');

  // contact route
  Route::get('contact/manage', [ContactController::class, 'index'])->name('contact.index');
  Route::get('contact/create', [ContactController::class, 'create'])->name('contact.create');
  Route::post('contact/save', [ContactController::class, 'store'])->name('contact.store');
  Route::get('contact/{id}/edit', [ContactController::class, 'edit'])->name('contact.edit');
  Route::post('contact/update', [ContactController::class, 'update'])->name('contact.update');
  Route::post('contact/inactive', [ContactController::class, 'inactive'])->name('contact.inactive');
  Route::post('contact/active', [ContactController::class, 'active'])->name('contact.active');
  Route::post('contact/destroy', [ContactController::class, 'destroy'])->name('contact.destroy');

  // banner category route
  Route::get('banner-category/manage', [BannerCategoryController::class, 'index'])->name('banner_category.index');
  Route::get('banner-category/create', [BannerCategoryController::class, 'create'])->name('banner_category.create');
  Route::post('banner-category/save', [BannerCategoryController::class, 'store'])->name('banner_category.store');
  Route::get('banner-category/{id}/edit', [BannerCategoryController::class, 'edit'])->name('banner_category.edit');
  Route::post('banner-category/update', [BannerCategoryController::class, 'update'])->name('banner_category.update');
  Route::post('banner-category/inactive', [BannerCategoryController::class, 'inactive'])->name('banner_category.inactive');
  Route::post('banner-category/active', [BannerCategoryController::class, 'active'])->name('banner_category.active');
  Route::post('banner-category/destroy', [BannerCategoryController::class, 'destroy'])->name('banner_category.destroy');

  // banner  route
  Route::get('banner/manage', [BannerController::class, 'index'])->name('banners.index');
  Route::get('banner/create', [BannerController::class, 'create'])->name('banners.create');
  Route::post('banner/save', [BannerController::class, 'store'])->name('banners.store');
  Route::get('banner/{id}/edit', [BannerController::class, 'edit'])->name('banners.edit');
  Route::post('banner/update', [BannerController::class, 'update'])->name('banners.update');
  Route::post('banner/inactive', [BannerController::class, 'inactive'])->name('banners.inactive');
  Route::post('banner/active', [BannerController::class, 'active'])->name('banners.active');
  Route::post('banner/destroy', [BannerController::class, 'destroy'])->name('banners.destroy');



  // categories
  Route::get('categories/manage', [CategoryController::class, 'index'])->name('categories.index');
  Route::get('categories/create', [CategoryController::class, 'create'])->name('categories.create');
  Route::post('categories/save', [CategoryController::class, 'store'])->name('categories.store');
  Route::get('categories/{id}/edit', [CategoryController::class, 'edit'])->name('categories.edit');
  Route::post('categories/update', [CategoryController::class, 'update'])->name('categories.update');
  Route::post('categories/inactive', [CategoryController::class, 'inactive'])->name('categories.inactive');
  Route::post('categories/active', [CategoryController::class, 'active'])->name('categories.active');
  Route::post('categories/destroy', [CategoryController::class, 'destroy'])->name('categories.destroy');



  Route::get('subcategories/manage', [SubcategoryController::class, 'index'])->name('subcategories.index');
  Route::get('subcategories/create', [SubcategoryController::class, 'create'])->name('subcategories.create');
  Route::post('subcategories/save', [SubcategoryController::class, 'store'])->name('subcategories.store');
  Route::get('subcategories/{id}/edit', [SubcategoryController::class, 'edit'])->name('subcategories.edit');
  Route::post('subcategories/update', [SubcategoryController::class, 'update'])->name('subcategories.update');
  Route::post('subcategories/inactive', [SubcategoryController::class, 'inactive'])->name('subcategories.inactive');
  Route::post('subcategories/active', [SubcategoryController::class, 'active'])->name('subcategories.active');
  Route::post('subcategories/destroy', [SubcategoryController::class, 'destroy'])->name('subcategories.destroy');


  // Childcategories
  Route::get('childcategories/manage', [ChildcategoryController::class, 'index'])->name('childcategories.index');
  Route::get('childcategories/create', [ChildcategoryController::class, 'create'])->name('childcategories.create');
  Route::post('childcategories/save', [ChildcategoryController::class, 'store'])->name('childcategories.store');
  Route::get('childcategories/{id}/edit', [ChildcategoryController::class, 'edit'])->name('childcategories.edit');
  Route::post('childcategories/update', [ChildcategoryController::class, 'update'])->name('childcategories.update');
  Route::post('childcategories/inactive', [ChildcategoryController::class, 'inactive'])->name('childcategories.inactive');
  Route::post('childcategories/active', [ChildcategoryController::class, 'active'])->name('childcategories.active');
  Route::post('childcategories/destroy', [ChildcategoryController::class, 'destroy'])->name('childcategories.destroy');


  // Brands
  Route::get('brands/manage', [BrandController::class, 'index'])->name('brands.index');
  Route::get('brands/create', [BrandController::class, 'create'])->name('brands.create');
  Route::post('brands/save', [BrandController::class, 'store'])->name('brands.store');
  Route::get('brands/{id}/edit', [BrandController::class, 'edit'])->name('brands.edit');
  Route::post('brands/update', [BrandController::class, 'update'])->name('brands.update');
  Route::post('brands/inactive', [BrandController::class, 'inactive'])->name('brands.inactive');
  Route::post('brands/active', [BrandController::class, 'active'])->name('brands.active');
  Route::post('brands/destroy', [BrandController::class, 'destroy'])->name('brands.destroy');


  // color
  Route::get('color/manage', [ColorController::class, 'index'])->name('colors.index');
  Route::get('color/create', [ColorController::class, 'create'])->name('colors.create');
  Route::post('color/save', [ColorController::class, 'store'])->name('colors.store');
  Route::get('color/{id}/edit', [ColorController::class, 'edit'])->name('colors.edit');
  Route::post('color/update', [ColorController::class, 'update'])->name('colors.update');
  Route::post('color/inactive', [ColorController::class, 'inactive'])->name('colors.inactive');
  Route::post('color/active', [ColorController::class, 'active'])->name('colors.active');
  Route::post('color/destroy', [ColorController::class, 'destroy'])->name('colors.destroy');


});
