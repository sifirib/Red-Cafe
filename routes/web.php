<?php

use App\Http\Controllers\AdminPanel\AdminProductController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
use App\Http\Controllers\AdminPanel\CategoryController as AdminCategoryController;
use App\Http\Controllers\AdminPanel\ImageController as ImageController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|*******************
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/laravel', function () {
    return view('welcome');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::redirect('/anasayfa','/');
Route::redirect('/home','/');

Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name');

Route::post('/save', [HomeController::class, 'save'])->name('save');


Route::get('/product/{id}', [HomeController::class, 'product'])->name('product');
Route::get('/categoryproducts/{id}/{slug}', [HomeController::class, 'categoryproducts'])->name('categoryproducts');
Route::view('/loginuser', 'home.login');
Route::view('/registeruser', 'home.register');
Route::get('/logoutuser', [HomeController::class, 'logout'])->name('logoutuser');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// ******************* ADMIN PANEL ROUTES *******************
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/', [AdminHomeController::class, 'index'])->name('index');
    // ******************* ADMIN CATEGORY ROUTES *******************
    Route::prefix('/category')->name('category.')->controller(AdminCategoryController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    // ******************* ADMIN PRODUCT ROUTES *******************
    Route::prefix('/product')->name('product.')->controller(AdminProductController::class)->group(function () {
        Route::get('/', 'index')->name('index');
        Route::get('/create', 'create')->name('create');
        Route::post('/store', 'store')->name('store');
        Route::get('/edit/{id}', 'edit')->name('edit');
        Route::post('/update/{id}', 'update')->name('update');
        Route::get('/destroy/{id}', 'destroy')->name('destroy');
        Route::get('/show/{id}', 'show')->name('show');
    });

    // ******************* ADMIN PRODUCT IMAGE GALLERY ROUTES *******************
    Route::prefix('/image')->name('image.')->controller(ImageController::class)->group(function () {
        Route::get('/{pid}', 'index')->name('index');
        Route::post('/store/{pid}', 'store')->name('store');
        Route::get('/destroy/{pid}/{id}', 'destroy')->name('destroy');
    });

});
