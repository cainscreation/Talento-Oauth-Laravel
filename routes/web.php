<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Auth::routes();
// Route::get('/home', 'OrganizesController@index');
Route::resource('organizes', 'OrganizesController');
Route::get('/{id}/user_register', 'RegistersController@index');
Route::post('user_register', 'RegistersController@store');



