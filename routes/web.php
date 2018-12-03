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

route::group(['middleware' => ['auth']], function () {
    route::group(['prefix' => 'students'], function () {
        Route::get('/', 'StudentController@index')->name('students.index');
        Route::get('/{id}/destroy', 'StudentController@destroy')->name('students.destroy');
        route::get('/create', 'StudentController@create')->name('students.create');
        route::post('/create', 'StudentController@store')->name('students.store');
        route::get('/{id}/edit', 'StudentController@edit')->name('students.edit');
        route::post('/{id}/edit', 'StudentController@update')->name('students.update');
        Route::get('/search', 'StudentController@search')->name('students.search');

    });
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('students.home');
//Route::post('/home', 'HomeController@postLogin')->name('students.done');
