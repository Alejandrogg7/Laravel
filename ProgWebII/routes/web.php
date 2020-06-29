<?php

use Illuminate\Support\Facades\Route;

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

Route::resource('responsables', 'ResponsablesController');
Route::get('borrarresponsable/{id}', 'ResponsablesController@destroy');
Route::get('editarresponsable/{id}', 'ResponsablesController@edit');
Route::post('editarresponsablebd', 'ResponsablesController@update');

Route::resource('tickets', 'TicketsController');
Route::get('borrartickets/{id}', 'TicketsController@destroy');
Route::get('editartickets/{id}', 'TicketsController@edit');
Route::post('editarticketsbd', 'TicketsController@update');

//Route::get('/', 'ResponsablesController@index');
//Route::get('/update', 'ResponsablesController@update');
//Route::post('/store', 'ResponsablesController@store');
//Route::get('/delete', 'ResponsablesController@destroy');

