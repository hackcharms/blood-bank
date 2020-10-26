<?php

use App\Http\Controllers\ConsumerController;
use App\Http\Controllers\HospitalController;
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

//==================================== Hospital=======================================//
Route::get('/dashboard', [HospitalController::class, 'Dashboard'])->name('hospital.dashboard');
Route::get('/available-blood', [HospitalController::class, 'showAvailableBlood'])->name('hospital.availableBlood');
Route::get('/blood-requests', [HospitalController::class, 'showBloodRequests'])
    ->name('hospital.requests');
Route::post('/add-blood', [HospitalController::class, 'AddBlood'])
    ->name('hospital.addBlood');
Route::post('/handle-blood-request', [HospitalController::class, 'handleBloodRequests'])
    ->name('hospital.handleRequests');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])
    ->name('home');
//========================================Consumer =======================================//
Route::get('/consumer', [ConsumerController::class, 'bankIndex'])
    ->name('consumer.banks');
Route::get('/hospital/{hospital}', [ConsumerController::class, 'showBank'])->name('consumer.showHospital');
Route::post('/send-request/{hospital}', [ConsumerController::class, 'sendRequest'])->name('consumer.sendRequest');
//================================Login <==&==> Registration=========================//

Route::view('/login', 'login')->name('login');
Route::get('/register', function () {
    return view('register');
})
    ->name('register');
Route::get('/register/{type}', [App\Http\Controllers\Auth\RegisterController::class, 'showRegistrationForm'])
    ->where('type', 'hospital|consumer')
    ->name('register.form');
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/login/{type}', [App\Http\Controllers\Auth\LoginController::class, 'showLoginForm'])
    ->where('type', 'hospital|consumer')
    ->name('login.form');



// Route::get('/consumer', function () {
//     return view('consumer');
// });
