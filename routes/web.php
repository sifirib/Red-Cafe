<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [HomeController::class, 'index']);
Route::redirect('/anasayfa','/home');

Route::get('/test/{id}/{name}', [HomeController::class, 'test'])->whereNumber('id')->whereAlpha('name');




Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


// ******************* ADMIN PANEL ROUTES *******************
Route::get('/admin', [AdminHomeController::class, 'index'])->name('admin');


// ******************* ADMIN CATEGORY ROUTES *******************
Route::get('/admin/category', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'index'])->name('admin_category');
Route::get('/admin/category/create', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'create'])->name('admin_category_create');
Route::post('/admin/category/store', [\App\Http\Controllers\AdminPanel\CategoryController::class, 'store'])->name('admin_category_store');

