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

Route::get('/', 'ImmuneController@index');
Route::resource('/Immune', 'ImmuneController');
Route::any('immunes', 'ImmuneController@immune');
Route::resource('/Immunization', 'ImmunizationController');

