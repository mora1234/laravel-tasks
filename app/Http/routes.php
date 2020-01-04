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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::post('/tasks', [
    'uses' => 'TaskController@postTask'
]);

Route::get('/tasks', [
    'uses' => 'TaskController@getTasks'
]);

Route::get('/tasks/{id}', [
    'uses' => 'TaskController@getTask'
]);

Route::put('/tasks/{id}', [
    'uses' => 'TaskController@putTask'
]);

Route::delete('/tasks/{id}', [
    'uses' => 'TaskController@deleteTask'
]);