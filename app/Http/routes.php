<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('authenticate', 'AuthenticateController', ['only' => ['index']]);
Route::post('authenticate', 'AuthenticateController@authenticate');


Route::get('/', function () {
    return view('welcome');
});
// trae para un cliente {id} todas las computadoras asignadas
Route::get('client/{id}/computer', 'ComputersController@showassign');
// Asigna a un cliente {id} la computadora {id2}
Route::patch('client/{id}/computer/{id2}', 'ComputersController@assign');

// trae para un cliente {id} todas los monitores asignadas
Route::get('client/{id}/monitor', 'MonitorsController@showassign');
// Asigna a un cliente {id} el monitor {id2}
Route::patch('client/{id}/monitor/{id2}', 'MonitorsController@assign');

Route::resource('client', 'ClientsController',['only' => ['index','update','store','destroy','show']]);
Route::resource('computer', 'ComputersController',['only' => ['index','update','store','destroy','show']]);
Route::resource('monitor', 'MonitorsController',['only' => ['index','update','store','destroy','show']]);
