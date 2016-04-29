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
Route::get('/logout', [
    'uses' => 'AuthController@destroy',
    'as'   => 'auth_destroy_path'
]);

Route::get('/index', [
    'uses' => 'CompanyController@dashboard',
    'as'   => 'company_dashboard_path'
]);



Route::get('/grade/{id}', [
    'uses' => 'CompanyController@show',
    'as'   => 'company_show_path'
]);

Route::get('/company/all', [
    'uses' => 'CompanyController@showall',
    'as'   => 'company_showall_path'
]);

Route::get('new/profile',[
  'uses' => 'ProfileController@store',
  'as'   => 'profile_new_path'
]);

Route::post('new/profile',[
  'uses' => 'ProfileController@create',
  'as'   => 'profile_create_path'
]);


Route::get('new/position',[
  'uses' => 'PositionController@store',
  'as'   => 'position_store_path'
]);

Route::post('new/position',[
  'uses' => 'PositionController@create',
  'as'   => 'position_create_path'
]);

Route::get('/dashboard',[
  'uses' => 'CompanyController@menu',
  'as'   => 'company_menu_path'
]);
