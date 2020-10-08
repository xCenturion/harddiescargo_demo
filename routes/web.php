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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/','App\Http\Controllers\dashboardController@index');
Route::get('/login','App\Http\Controllers\AuthController@login')->name('login');
Route::post('/postlogin','App\Http\Controllers\AuthController@postlogin');
Route::get('/logout','App\Http\Controllers\AuthController@logout');
Route::get('/PengirimanBarang','App\Http\Controllers\PengirimanBarangController@index');

Route::group(['middleware' => 'auth'],function(){
	Route::get('/AdminDashboard','App\Http\Controllers\AdminDashboardController@index');
	
	Route::post('/PengirimanBarang/create','App\Http\Controllers\PengirimanBarangController@create');
	Route::get('PengirimanBarang/{id}/update','App\Http\Controllers\PengirimanBarangController@update');
	Route::post('PengirimanBarang/{id}/ProcessUpdate','App\Http\Controllers\PengirimanBarangController@ProcessUpdate');
	Route::get('PengirimanBarang/{id}/delete','App\Http\Controllers\PengirimanBarangController@delete');
});