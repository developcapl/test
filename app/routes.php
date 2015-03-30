<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('test', function(){
	echo Ganesha::myfun();
});
Route::get('repository', array('as'=>'repository', 'uses'=>'HomeController@repository'));

Route::get('redis', array('as' =>'redis','uses'=>'HomeController@redis'));

Route::get('trail',array('as'=>'trail','uses'=>'HomeController@showWelcome'));