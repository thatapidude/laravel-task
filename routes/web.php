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

Route::get('/task', 'TaskController@index');

Route::get('/task-list', 'TaskController@get');

Route::delete('/task/{id}', 'TaskController@delete');

Route::put('/task/{id}', 'TaskController@update');

Route::post('/task', 'TaskController@create');

// vuejs only controller is not needed
Route::get('/user-input', function(){
    return view('user-input.user-input');
})->middleware('auth');

Route::get('/task-one', function(){
    return view('task-one.task-one');
})->middleware('auth');

Route::get('/task-two', function(){
    return view('task-two.task-two');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
