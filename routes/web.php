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

Route::get('/students','StudentController@getAll');
Route::get('/students/add','StudentController@getAddForm');
Route::post('/students/add','StudentController@addStudent');
Route::get('/students/restore/{id}','StudentController@restoreStudent');

Route::get('/students/delete/{student}','StudentController@deleteStudent');