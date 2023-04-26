<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', 'RegistroController@formulario');
Route::post('/registro', 'RegistroController@registro')->name('registro.submit');