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
    return redirect()->route('home');
});
Route::get('/home','App\Http\Controllers\HomeController@index')->name('home');
Route::get('/data','App\Http\Controllers\DataController@index')->name('data');
Route::post('/data/tambah','App\Http\Controllers\DataController@tambah')->name('tambah');
Route::post('/data/delete','App\Http\Controllers\DataController@delete')->name('delete');
Route::get('/data/norm','App\Http\Controllers\SpkController@norm')->name('norm');
Route::get('/data/SPK','App\Http\Controllers\SpkController@index')->name('SPK');