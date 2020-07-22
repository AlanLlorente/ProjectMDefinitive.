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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/masajes', 'MasajesController@index');
Route::get('/masajes/create', 'MasajesController@create');
Route::get('masajes/{masajes}', 'MasajesController@show');
Route::post('/masajes', 'MasajesController@store');
Route::get('/masajes/edit/{masajes}', 'MasajesController@edit');
Route::put('/masajes/{masajes}', 'MasajesController@update');
Route::delete('/masajes/{masajes}', 'MasajesController@destroy');

//Route::resource('masajes', 'MasajesController');



Route::get('/home', 'HomeController@index')->name('home');
