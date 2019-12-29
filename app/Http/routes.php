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

/*Route::get(‘{data?}’, function()  
{  
return View::make(‘app’);  
})->where(‘data’, ‘.*’);  */

Route::post('/api/tasks', [
    'uses' => 'TaskController@postTask'
]);

Route::get('/api/tasks', [
    'uses' => 'TaskController@getTasks'
]);

Route::get('/api/task/{id}', [
    'uses' => 'TaskController@getTask'
]);

Route::put('/api/task/{id}', [
    'uses' => 'TaskController@putTask'
]);

Route::delete('/api/task/{id}', [
    'uses' => 'TaskController@deleteTask'
]);