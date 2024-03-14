<?php

use App\Http\Controllers\eu\RegistrationController;
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

Route::group(['namespace' => 'eu', 'prefix' => 'eu', 'middleware' => 'guest:admin'], function () {

    Route::get('login', [RegistrationController::class, 'loginShow'])->name('eu.loginshow');
    Route::post('login', [RegistrationController::class, 'login'])->middleware('admin')->name('eu.login');

    Route::get('register', [RegistrationController::class, 'UserRegistrationShow'])->name('registrationShow');
    Route::post('register', [RegistrationController::class, 'store'])->name('registration');
});











Route::get('/eu-files', function () {
    return view('eu.new_eu_file');
})->name('home');
