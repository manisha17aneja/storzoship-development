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
include "admin.php";
include "user.php";

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::resource('customsearch', 'App\Http\Controllers\CustomSearchController');


Route::get('search-order', [App\Http\Controllers\CustomSearchController::class, 'search_order'])->name('search.order');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


// Facebook Login URL
Route::prefix('facebook')->name('facebook.')->group( function(){
    Route::get('auth', [App\Http\Controllers\FaceBookController::class, 'loginUsingFacebook'])->name('login');
    Route::get('callback', [App\Http\Controllers\FaceBookController::class, 'callbackFromFacebook'])->name('callback');
});

// Google URL
Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [App\Http\Controllers\GoogleController::class, 'loginWithGoogle'])->name('login');
    Route::any('callback', [App\Http\Controllers\GoogleController::class, 'callbackFromGoogle'])->name('callback');
});

Route::get('ajax/validation', [App\Http\Controllers\PostController::class, 'ajaxValidation'])->name('ajax.validation');
Route::post('ajax/validation/store', [App\Http\Controllers\PostController::class, 'ajaxValidationStore'])->name('ajax.validation.store');


Route::get('/image', [App\Http\Controllers\PageController::class, 'index']);
Route::get('/readFiles', [App\Http\Controllers\PageController::class, 'readFiles'])->name('readFiles');
Route::post('/uploadFile', [App\Http\Controllers\PageController::class, 'uploadFile'])->name('uploadFile');

