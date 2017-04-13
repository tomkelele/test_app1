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


Route::get('/', 'HomeController@index');
Route::get('/profile', 'HomeController@profile')->middleware('auth');
Route::post('/change-avatar', 'HomeController@changeAvatar')->middleware('auth')->name('user.changeAvatar');
Route::group(['prefix' => 'product'], function(){
	Route::get('/', 'HomeController@getList');
	Route::get('/{id}', 'HomeController@detail');
});


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware'=> 'admin'], function(){
	Route::get('/', 'AdminController@index');

	Route::group(['prefix' => 'user'], function(){
		Route::get('/', 'UsersController@index')->name('admin.user.list');
		Route::get('/edit/{id}', 'UsersController@getEdit')->name('admin.user.edit');
		Route::post('/edit/{id}', 'UsersController@postEdit')->name('admin.user.postEdit');
		Route::get('/delete/{id}', 'UsersController@delete')->name('admin.user.delete');
	});

	Route::group(['prefix' => 'product'], function(){
		Route::get('/', 'ProductsController@index')->name('admin.product.list');
		Route::post('/insert', 'ProductsController@postInsert')->name('admin.product.postInsert');
		Route::get('/insert', 'ProductsController@getInsert')->name('admin.product.getInsert');
		Route::get('/delete/{id}', 'ProductsController@delete')->name('admin.product.delete');
		Route::get('/edit/{id}', 'ProductsController@getEdit')->name('admin.product.edit');
		Route::post('/edit/{id}', 'ProductsController@postEdit')->name('admin.product.postEdit');
	});
});


