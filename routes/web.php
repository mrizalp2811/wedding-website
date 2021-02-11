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

Route::get('/main', function () {
    return view('main');
});

Route::view('/rsvp', 'rsvp');
Route::post('/rsvp', 'App\Http\Controllers\BulkSmsController@sendSms');

Route::view('/rsvp-pengajian', 'rsvp-pengajian');
Route::post('/rsvp-pengajian', 'App\Http\Controllers\BulkSmsController@sendSmsPengajian');

Route::view('/rsvp-jasmine', 'rsvp-jasmine');
Route::post('/rsvp-jasmine', 'App\Http\Controllers\BulkSmsController@sendSms');

Route::view('/ajax', 'bulksms');
Route::post('/ajax', 'App\Http\Controllers\AjaxController@AjaxRequest')->name('ajaxRequest.post');