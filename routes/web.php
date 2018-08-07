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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/tasks', 'CRUDController@index')->name('tasks.index');
Route::get('/tasks/add', 'CRUDController@add')->name('tasks.add');
Route::post('/tasks/insert', 'CRUDController@insert')->name('tasks.insert');
Route::get('/tasks/edit/{id}', 'CRUDController@edit')->name('tasks.edit');
Route::post('/tasks/update/{id}', 'CRUDController@update')->name('tasks.update');
Route::get('/tasks/delete/{id}', 'CRUDController@delete')->name('tasks.delete');

Route::get('/users', 'UserController@index')->name('users.index');
Route::get('/users/add', 'UserController@add')->name('users.add');
Route::post('/users/insert', 'UserController@insert')->name('users.insert');
Route::get('/users/edit/{id}', 'UserController@edit')->name('users.edit');
Route::post('/users/update/{id}', 'UserController@update')->name('users.update');
Route::get('/users/delete/{id}', 'UserController@delete')->name('users.delete');
