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

Route::get('/',function(){
	return view('home');
});

Route::group(['namespace' => 'Manage'], function () {
	

	// Contact page
	Route::group(['prefix' => 'contact'], function () {
		Route::get('/','ContactFormController@create');
		Route::post('/','ContactFormController@store');
	});

	Route::get('/about',function(){
		return view('about');
	});

	Route::group(['prefix' => 'customers'], function () {
		
		Route::get('/','CustomerController@index');
		Route::get('create','CustomerController@create');
		Route::post('/','CustomerController@store');
		Route::get('/{customer}','CustomerController@show');
		Route::get('/{customer}/edit','CustomerController@edit');
		Route::patch('/{customer}','CustomerController@update');
		Route::delete('/{customer}','CustomerController@destroy');
	});


});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
