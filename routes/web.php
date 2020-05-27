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

Route::get('/', "WelcomeController@index");
Route::get('/corps', function () {
    return view("corps");
});

Route::get('/amicale', function () {
    return view("amicale");
});

Route::get('/devenirSp', function () {
    return view('devenirSp');
});

Route::get('/contact', "ContactController@index");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', 'AdminController@index')
    ->name('admin')
    ->middleware('auth');
