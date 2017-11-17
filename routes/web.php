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
Route::get('/quiz/{id}',['as' => 'question', 'uses' => 'UserController@getquestion']);
Route::get('/right-sidebar',function(){
    return view('right-sidebar');
});
Route::get('/admin', function(){
	return view('admin.index');
});
Route::get('/questions', 'AdminController@getallquestions');
Route::get('/answers/{id}', ['as' => 'question', 'uses' => 'AdminController@question']);
Route::post('/getanswers/{id}','AdminController@getanswers');
Route::post('/addquestion', 'AdminController@addquestion');
Route::get('/topic','AdminController@topiccreation');
Route::get('/gramma','AdminController@grammacreation');
Route::post('/addtopic', 'AdminController@addtopic');
Route::get('/deletetopic/{id}', 'AdminController@deletetopic');
Route::get('/grammalist', 'AdminController@grammalist');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
