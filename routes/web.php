<?php

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

Route::get('/', 'HomeController@index')->middleware('guest');
Route::post('/dologin','Auth\LoginController@doLogin')->name('doLogin')->middleware('guest');
Route::get('/dologout','EmployeeController@doLogout')->middleware('auth');
Route::get('/employee', 'EmployeeController@index')->middleware('auth');
