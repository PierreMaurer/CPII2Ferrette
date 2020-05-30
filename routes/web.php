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

Route::get('/', "WelcomeController@index")->name('welcome');
Route::get('/corps', function () {

    return view("corps", [
        'intervention' => (new App\Intervention)->take(3)->latest()->get()
    ]);
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

Route::get('/admin/gallery', 'GalleryController@index')
    ->name('AdminGallery')
    ->middleware('auth');

Route::get('/admin/event', 'GalleryController@index')
    ->name('AdminEvent')
    ->middleware('auth');
