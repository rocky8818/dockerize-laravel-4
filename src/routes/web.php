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
Route::get('/',[

        'uses' => 'ControllerIndex@index',
        'as'   => 'index'
    ]);
Route::get('/busqueda',[

        'uses' => 'ControllerIndex@search',
        'as'   => 'index.search'
    ]);
Route::get('inmueble/{inmueble}',[

        'uses' => 'ControllerIndex@show',
        'as'   => 'index.inmueble'
    ]);
Route::middleware('auth')->prefix('admin')->group(function (){
	Route::get('/',[

        'uses' => 'ControllerInmueble@index',
        'as'   => 'admin.index'
    ]);
    Route::resource('inmueble','ControllerInmueble');
    Route::get('inmueble/upimages/{inmueble}',[

        'uses' => 'ControllerInmueble@upMultiImages',
        'as'   => 'inmueble.upimg'
    ]);
    Route::post('inmueble/upimages/{inmueble}',[

        'uses' => 'ControllerInmueble@upDataMultiImages',
        'as'   => 'inmueble.upimgpost'
    ]);
     Route::get('inmueble/deleteimagen/{id}',[

        'uses' => 'ControllerInmueble@deleteFoto',
        'as'   => 'inmueble.delelteimagen'
    ]);
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
