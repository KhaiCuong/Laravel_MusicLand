<?php

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

Route::get('/', function () {
    return view('home');
});


Route::get('/admin', function () {
    return view('admins.admin');
});


Route::get('/l', function () {
    return view('mylibrary');
});

Route::get('/p', function () {
    return view('playlist');
});

Route::get('/lg', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});