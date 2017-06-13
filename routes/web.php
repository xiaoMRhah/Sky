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

Route::get('/', 'User\HeadInfo@index');

Route::get('environment/',function(){
	return view('environment/evolve');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth','namespace' => 'Admin','prefix'=>'admin'],
		function(){
	Route::get('/','UserController@index');
	Route::get('addGoods/','UserController@addGoods');
	Route::post('submit/','UserController@uploadProduct');
});


