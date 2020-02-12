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
  //  return view('welcome');
     return view('layout.default');
});

Route::get('/clients/list','ClientController@list')->name('clients.list');
Route::resource('clients','ClientController');



Route::get('/users/list','UserController@list')->name('users.list');
Route::resource('users','UserController');


Route::get('/menus/list','MenuController@list')->name('menus.list');
Route::resource('menus','MenuController');



Route::get('/commandes/list','CommandeController@list')->name('commandes.list');
Route::resource('commandes','CommandeController');


Route::get('/gestionnaires/list','GestionnaireController@list')->name('gestionnaires.list');
Route::resource('gestionnaires','GestionnaireController');
