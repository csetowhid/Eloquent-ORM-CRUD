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

Route::get('home','StudentController@index')->name('home');
Route::post('/Store/Student','StudentController@insert')->name('storestudent');
Route::get('/All/Student','StudentController@read')->name('allstudent');
Route::get('viewstudent/{id}','StudentController@show');
Route::get('deletestudent/{id}','StudentController@delete');
Route::get('editestudent/{id}','StudentController@edit');
Route::post('updatestudent/{id}','StudentController@update');
