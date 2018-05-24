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

Route::get('/', function(){
	return View::make('index');
});
Route::get('/o-mnie', function(){
	return View::make('o-mnie');
});
Route::get('/szkola', function(){
	return View::make('szkola');
});
Route::get('/doswiadczenie-zawodowe', function(){
	return View::make('doswiadczenie');
});
Route::get('/kontakt', function(){
	return View::make('kontakt');
});
Route::get('/react', function(){
	return View::make('react');
});



