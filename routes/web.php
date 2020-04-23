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

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');//->middleware('verified');
Route::get('/home/create', 'VerificationController@create')->name('verification.create');
Route::post('/home','VerificationController@store')->name('verification.store');
Route::get('/home/plate', 'VerificationController@indexplate')->name('verification.indexplate');
Route::post('/home/plate', 'VerificationController@showplate')->name('verification.showplate');