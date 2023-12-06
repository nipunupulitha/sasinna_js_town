<?php

use App\Http\Controllers\DistrictController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\TownController;
use App\Http\Controllers\UserController;
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


Route::post('getDistricts',[DistrictController::class,'getDistricts'])->name('getDistricts');
Route::post('getTowns',[TownController::class,'getTowns'])->name('getTowns');

// Route::post('/user/create', 'UserController@create')->name('user.create');

Route::get('/user/create',[UserController::class,'create'])->name('user.create');
Route::post('/user/store',[UserController::class,'store'])->name('user.store');

// Route::get('send-email', [MailController::class, 'sendEmail']);


