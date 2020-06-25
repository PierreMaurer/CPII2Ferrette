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
    'register' => true, // Registration Routes...
    'reset' => false, // Password Reset Routes...
    'verify' => false, // Email Verification Routes...
]);


Route::get('/home', 'HomeController@index')->name('home');

//Admin Route

Route::get('/admin', function () {
    return view('admin/adminMenu');
})
    ->name('admin')
    ->middleware('auth');

// Gallery Route

Route::get('/admin/gallery', 'GalleryController@index')
    ->name('AdminGallery')
    ->middleware('auth');

//Event Route

Route::get('/admin/event', 'EventSPController@index')
    ->name('admin.event')
    ->middleware('auth');

//Delete Event

Route::get('/admin/event/{eventSP}/delete', 'EventSPController@destroy')
    ->name('admin.eventdelete')
    ->middleware('auth');

//Create Event

Route::get('/admin/event/create', 'EventSPController@create')
    ->name('admin.event')
    ->middleware('auth');

//Store Event

Route::post('/admin/event', 'EventSPController@store')
    ->name('admin.event')
    ->middleware('auth');

// Edit Event

Route::get('/admin/event/{eventSP}/edit', 'EventSPController@edit')
    ->name('admin.eventEdit')
    ->middleware('auth');

// Update Event

Route::put('/admin/event/{eventSP}', 'EventSPController@update')
    ->middleware('auth');

/// Intervention Route

Route::get('/admin/intervention/', 'InterventionController@index')
    ->name('admin.intervention')
    ->middleware('auth');

//Create Intervention
Route::get('/admin/intervention/create', 'InterventionController@create')
    ->name('AdminEventCreate')
    ->middleware('auth');

Route::post('/admin/intervention', 'InterventionController@store')
    ->middleware('auth');

//Edit Intervention

Route::put('/admin/intervention/{intervention}', 'InterventionController@update')
    ->middleware('auth');

Route::get('/admin/intervention/{intervention}/edit', 'InterventionController@edit')
    ->name('intervention.edit')
    ->middleware('auth');

//Delete Intervention

Route::get('/admin/intervention/{intervention}/delete', 'InterventionController@delete')
    ->middleware('auth');
