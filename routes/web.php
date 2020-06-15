<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('index');
});

Auth::routes();
Route::get('/home', 'OrganizesController@index');
Route::resource('organizes', 'OrganizesController');
Route::get('/{id}/user_register', 'RegistersController@show');
Route::post('user_register', 'RegistersController@store');
Route::resource('/all_users', 'RegistersController');
Route::resource('roles', 'RolesController');
Route::resource('courses', 'CoursesController');
Route::resource('add_courses', 'AddCoursesController');
Route::get('/{id}/add_courses', 'AddCoursesController@show');   
Route::resource('topics', 'TopicsController');
Route::get('/{id}/topics', 'TopicsController@show');   






Route::resource('permissions', 'PermissionsController');

// Route::get('/all_users', 'RegistersController@show');





