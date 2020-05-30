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
Route::get('/corps', 'CorpController@index');

Route::get('/amicale', function () {
    return view("amicale");
});

Route::get('/devenirSp', function () {
    return view('devenirSp');
});

Route::get('/contact', "ContactController@index");

Auth::routes([
    'register' => false, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return view('admin/adminMenu');
})
    ->name('admin')
    ->middleware('auth');

Route::get('/admin/gallery', 'GalleryController@index')
    ->name('AdminGallery')
    ->middleware('auth');

Route::get('/admin/event', 'GalleryController@index')
    ->name('AdminEvent')
    ->middleware('auth');

Route::get('/admin/intervention/', 'InterventionController@index')
    ->name('AdminEventCreate')
    ->middleware('auth');

Route::get('/admin/intervention/create', 'InterventionController@create')
    ->name('AdminEventCreate')
    ->middleware('auth');

Route::get('/admin/intervention/{id}/edit', 'InterventionController@edit')
    ->name('AdminEventCreate')
    ->middleware('auth');
