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

Route::get('/', function () {
    return view('welcome');
});


Route::resource('items', 'ItemController');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('items', 'ItemController');

Route::resource('bags', 'BagController');

Route::resource('shifts', 'ShiftController');

Route::resource('supervisors', 'SupervisorController');

Route::resource('bagItems', 'BagItemsController');