<?php

Route::resource('task','TaskController');
Route::resource('taskadd','NewController');
Route::resource('menu_ingridient','menu_ingridientController');

Route::get('/', function () {
	return view('welcome');
});

/*MENU*/
Route::get('/menu', 'menu_controller@menu');

/* ADMIN*/
//Route::get('/admin', 'admin_controller@admin')->middleware('auth');
//Route::post('/admin', 'admin_controller@menu')->name('adminStore');
/*INGREDIENT*/
Route::get('/ingredients', 'ingredient_controller@ingredient');
Route::post('/ingredients', 'ingredient_controller@menu')->name('ingredientStore');
//Route::get('/ingredient', 'ingredient_controller@storeImage');

Route::get('/ingredient', 'ingredient_controller@ingredient_load');
Route::post('/ingredient', 'ingredient_controller@menuIngredientStore')->name('menuIngredientStore');

/*WAITER*/
Route::get('/waiterplace', 'waiter_controller@place');
Route::post('/waiterplace', 'waiter_controller@placestore');
Route::post('/archive', 'waiter_controller@archive');


Route::get('/waiter', 'waiter_controller@waiter');
Route::post('/waiter', 'waiter_controller@store');

/*TOTAL*/
Route::get('/total', 'total_controller@total');
Route::post('/total', 'total_controller@store');
Route::post('/totalorder', 'total_controller@totalorder');

/*COOK*/
Route::get('/cook', 'cook_controller@cook');
Route::post('/cook', 'cook_controller@store');

/*AUTH*/
Route::get('auth/login','Auth\AuthController@getLogin');
Route::post('auth/login','Auth\AuthController@postLogin');
Route::get('auth/logout','Auth\AuthController@getLogout');
Route::get('auth/register','Auth\AuthController@getRegister');
Route::post('auth/register','Auth\AuthController@postRegister');

Route::group(['prefix'=>'adminzone','middleware'=>'auth'],function(){
	Route::get('/', function(){
		echo "Welcome, admin!";
	});
});

Auth::routes();

Route::get('/home', 'HomeController@index');
