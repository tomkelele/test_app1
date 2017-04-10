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

Auth::routes();

Route::group(['prefix' => 'admin', 'middleware'=> 'admin'], function(){
	Route::get('/', 'AdminController@index');
	Route::get('/profile','AdminController@profile')->name('admin.profile');

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
	});
});


