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
    return view('index');
});
Route::get('/elements',function(){
    return view('elements');
});
Route::get('/left-sidebar',function(){
    return view('left-sidebar');
});
Route::get('/right-sidebar',function(){
    return view('right-sidebar');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
