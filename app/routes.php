<?php

// app/routes.php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Bind route parameters.
Route::model('chore', 'Chore');

// Show pages.
Route::get('/', 'ChoreController@index');
Route::get('/create', 'ChoreController@create');
Route::get('/edit/{chore}', 'ChoreController@edit');
Route::get('/delete/{chore}', 'ChoreController@delete');

// Handle form submissions.
Route::post('/create', 'ChoreController@handleCreate');
Route::post('/edit', 'ChoreController@handleEdit');
Route::post('/delete', 'ChoreController@handleDelete');
