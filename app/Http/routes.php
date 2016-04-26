<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/



Route::get('/', [
    'uses' => 'CompanyController@index',
    'as'   => 'company_index_path'
]);

Route::post('/login', [
    'uses' => 'AuthController@store',
    'as'   => 'auth_store_path'
]);

Route::get('/dashboard', [
    'uses' => 'CompanyController@dashboard',
    'as'   => 'company_dashboard_path'
]);
