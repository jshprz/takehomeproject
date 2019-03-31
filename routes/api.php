<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
if (App::environment('production')) {
     URL::forceScheme('https');
}
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
	Route::get('get-employees','EmployeeController@getEmployees');
	Route::post('edit-employee','EmployeeController@editEmployee');
	Route::post('update-employee','EmployeeController@updateEmployee');
	Route::post('delete-employee','EmployeeController@deleteEmployee');
	Route::post('add-employee','EmployeeController@addEmployee');
	Route::post('search-employee','EmployeeController@searchEmployee');
