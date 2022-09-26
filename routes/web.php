<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController;

use App\Http\Controller\HomeControllers;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\UserController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemcardController;
use App\Http\Controllers\RegisterController;

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
Route::get('/', [HomeController::class, 'home'])->name('home');



 Route::get('/product', [ProductController::class,'index'])->name('product');
 Route::get('/order' , [OrderController::class, 'index'])->name('order');


// Route::get('/order', function () {
//     return view('admins.order');
// })->name('order');
// Route::resource('product',ProductController::class)->except('destroy');

Route::resource('user', UserController::class);

Route::get('/admin', function () {
    return view('admins.admin');
 })->name('admin');

Route::get('/l', function () {
    return view('mylibrary');
})->name('mylibrary');

Route::get('/extend', function () {
    return view('memcard.extend');
 })->name('extend');

Route::get('/mycard',[MemcardController::class, 'mycard'])->name('mycard');

Route::get('/p', function () {
    return view('playlist');
})->name('playlist');

Route::get('/login', [AuthenticationController::class, 'login'])->name('login');
Route::get('/logout', [AuthenticationController::class, 'logout'])->name('logout');


Route::post('/login', [AuthenticationController::class, 'processLogin'])->name('processLogin');



Route::resource('register', RegisterController::class);



