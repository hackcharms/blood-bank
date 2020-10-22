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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/login', 'login')->name('login');
Route::get('/register', function () {
    return view('register');
})->name('register');
Route::get('/register/{type}', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])
    ->where('type', 'hospital|consumer')
    ->name('register.form');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/login/{type}', [App\Http\Controllers\Auth\Login::class, 'login'])
    ->where('type', 'hospital|consumer')
    ->name('login.form');
