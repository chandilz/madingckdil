<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// video routes
Route::get('/settings/video', function () {
    return view('settings.video');
})->middleware('auth');

// setting_mading routes
Route::get('/settings/mading', function () {
    return view('settings.mading');
})->middleware('auth');

// textrun routes
Route::get('/settings/textrun', function () {
    return view('settings.textrun');
})->middleware('auth');

// profile routes
Route::get('/settings/profile', function () {
    return view('settings.profile');
})->middleware('auth');
