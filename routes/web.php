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

Route::get('/', 'ItensController@index');
Route::get('/itens/form', 'ItensController@form');
Route::post('/itens/form', 'ItensController@store');
Route::get('/itens/edit/{id}', 'ItensController@form');
Route::post('/itens/edit/{id}', 'ItensController@store');
Route::get('/itens/remover/{id}', 'ItensController@destroy');


