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

Route::get('api/products/all/{category?}', 'ProductController@all');
Route::get('api/products/chart/bestsales', 'ProductController@getChartBestSales');





Route::get('/', 'HomeController@index');
Route::resource('products', 'ProductController');
Route::get('chart', ['as' => 'chart', 'uses' => 'ProductController@chart']);
Route::get('pdf', ['as' => 'pdf', 'uses' => 'ProductController@pdf']);


//Route::get('home', 'HomeController@home');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
