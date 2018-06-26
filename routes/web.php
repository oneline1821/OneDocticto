<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('Especialidades/{name}', 'SpecialtyController@page')->name('especialidad');

Route::post('/addMail','EmailsController@sendMail');