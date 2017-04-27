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

Route::get('/home', 'HomeController@index');

Route::resource('/students', 'StudentController', ['names' => ['index' => 'student.index', 'create' => 'student.create', 'store' => 'student.store', 'edit' => 'student.edit', 'update' => 'student.update', 'destroy' => 'student.destroy']]);


