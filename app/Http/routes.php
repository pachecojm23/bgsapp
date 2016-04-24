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

Route::get('/', function () {
    return view('home');
});

Route::get('/homeworks', function(){
	return view('homeworks/homeworks');
});

Route::get('/schedules', function(){
   return view('institucional/horarios'); 
});


/*Route::get('/bgsapp', function(){
	return view('home');
});*/
