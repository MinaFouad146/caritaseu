<?php

use App\Http\Controllers\eu\homeController;
use App\Http\Controllers\eu\RegistrationController;
use App\Http\Controllers\eu\loginRegisterController;
use App\Http\Controllers\eu\social\EuFileController;

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
// ####################### Guest Users ###########################################








// ####################### Guest Users ###################################
Route::group(['namespace' => 'eu', 'prefix' => 'eu', 'middleware' => 'guest:admin'], function () {
    Route::get('login', [loginRegisterController::class, 'loginShow'])->name('eu.loginshow');
    Route::post('login', [loginRegisterController::class, 'login'])->name('eu.login');
});

// ####################### Authinticated Users ###################################
Route::group(['namespace' => 'eu', 'prefix' => 'eu', 'middleware' => 'auth:admin'], function () {
    Route::get('logout', [loginRegisterController::class, 'logout'])->name('eu.logout');
});

// ####################### Super User ###################################
Route::group(['namespace' => 'eu', 'prefix' => 'eu', 'middleware' => ['auth:admin', 'checkUserGroup:super']], function () {
    Route::get('register', [loginRegisterController::class, 'UserRegistrationShow'])->name('eu.registrationShow');
    Route::post('register', [loginRegisterController::class, 'store'])->name('eu.registration');
});

// ####################### Social Department ###################################
Route::group(['namespace' => 'eu', 'prefix' => 'eu', 'middleware' => ['auth:admin', 'checkUserGroup:social']], function () {
    Route::get('index', [homeController::class, 'index'])->name('eu.homeShow');

    Route::get('eufilesshow', [EuFileController::class, 'show'])->name('eu.filesshow');
});
















Route::get('/eu-files', function () {
    return view('eu.new_eu_file');
})->name('home');
