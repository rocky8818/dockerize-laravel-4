<?php

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

Route::get('/', array('uses' => 'FrontController@index', 'as'=>'home'));
Route::get('/quienes-somos', array('uses' => 'FrontController@quienesSomos', 'as'=>'quienesSomos'));

Route::get('/proyectos', array('uses' => 'FrontController@proyectos', 'as'=>'proyectos'));
    Route::get('/proyectos/{name}', ['as'=>'proyectos.laurel', 'uses'=>'FrontController@proyecto']);
    Route::get('/proyectos/{name}/galeria/{file}', ['as'=>'galaria', 'uses'=>'FrontController@galeria'])->where('file', '[1-8]');

Route::get('/presencia', array('uses' => 'FrontController@presencia', 'as'=>'presencia'));
Route::get('/contacto', array('uses' => 'FrontController@contacto', 'as'=>'contacto'));
Route::post('/sendEmail', array('uses' => 'FrontController@sendEmail', 'as' => 'sendEmail'));
Route::get('/privacidad', ['uses'=>'FrontController@privacidad', 'as'=>'privacidad']);