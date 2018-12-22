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

Route::get('/', 'Nhom1Controller@index');
Route::get('home', 'HomeController@index');

Route::resource('admin', 'ProductController');
Route::post('cart', 'Nhom1Controller@cart');
Route::get('result', 'ProductController@searchPaginate');
Route::resource('manufacture', 'ManufactureController');
Route::resource('protype', 'ProtypeController');
Route::get('result2', 'Nhom1Controller@searchName');
Route::get('/{id}', 'Nhom1Controller@page');
Route::get('detail/{id}', 'Nhom1Controller@detail');
Route::controllers([
    'auth'     => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
