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
Route::get('/quiztest', function(){
	return view('quiztest');
});
Route::get('testresult', 'UserController@testresult')->name('testresult');
Route::post('checkresult', 'UserController@checkresult');
Route::get('/quiz/100{id}',['as' => 'question', 'uses' => 'UserController@getquestion']);
Route::get('/gramma/{id}', ['as' => 'gramma', 'uses' => 'UserController@getgramma']);
Route::get('/admin', function(){
	return view('admin.index');
});
Route::get('/questions', 'AdminController@getallquestions');
Route::post('/changeanswer/{id}','AdminController@changeanswer');
Route::get('/answers/{id}', ['as' => 'question', 'uses' => 'AdminController@question']);
Route::post('/getanswers/{id}','AdminController@getanswers');
Route::post('/addquestion', 'AdminController@addquestion');
Route::get('/topic','AdminController@topiccreation');
Route::get('/gramma','AdminController@grammacreation');
Route::post('/addtopic', 'AdminController@addtopic');
Route::get('/deletetopic/{id}', 'AdminController@deletetopic');
Route::get('/grammalist', 'AdminController@grammalist');
Route::post('/addgramma', 'AdminController@addgramma');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
