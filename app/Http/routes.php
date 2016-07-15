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
    return view('welcome');
});

//Route::resource('issue','IssuesController');

/*Route::get('/issue/', function () {return view('issue.index');});
Route::get('/issue/create', function () {return view('issue.create');});
Route::get('/issue/edit', function () {return view('issue.edit');});
Route::get('/issue/vote', function () {return view('issue.vote');});*/

/*Route::get('issues','IssuesController@index');
Route::get('issues/create','IssuesController@create');
Route::get('issues/{id}/edit','IssuesController@edit');
Route::post('issues','IssuesController@store');
Route::post('issues','IssuesController@update');*/

Route::get('issue','IssuesController@index');
Route::get('issue/create','IssuesController@create');
Route::get('issue/{id}/edit','IssuesController@edit');
Route::post('issue','IssuesController@store');
Route::post('issue','IssuesController@update');

