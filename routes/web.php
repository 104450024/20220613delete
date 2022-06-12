<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('contactlist', 'App\Http\Controllers\DeleteUserController@contactlist');
Route::post('multipleusersdelete', 'App\Http\Controllers\DeleteUserController@multipleusersdelete');