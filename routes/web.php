<?php

use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Models\Admin\Banner;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Admin Route
Route::middleware(['AdminAuthMiddleware'])->group(function(){

    Route::get('/admin', function () {return redirect(url('/dashboard'));})->name('admin.index');
    Route::get('/dashboard', function () {return view('admin.index');});


    Route::controller(UserController::class)->group(function(){
        Route::get('/users' ,'index')->name('users');
    });


    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/category', 'index')->name('admin.category');
        Route::post('/admin/category/insert', 'insert')->name('admin.category.insert');
        // Route::get('/admin/category/{category_slug}/edit', 'edit')->name('admin.category.edit');
    });

    Route::controller(BannerController::class)->group(function(){
        Route::get('/admin/banners', 'index')->name('admin.banners');
        Route::post('/admin/banners/insert', 'insert')->name('admin.banners.insert');
        Route::get('/admin/banners/status/{banner_id}', 'status')->name('admin.banners.status');
    });




});

// Users Route
Route::controller(FrontendController::class)->group(function(){
    Route::get('/', 'index');
});




require __DIR__.'/auth.php';
