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
    return view('index');
});


// menu route

// show menu
Route::get('/menu', 'MenuController@index')->name('allMenu');

// create menu form 
Route::get('/addmenus','MenuController@add')->name('addmenus');

// store data
Route::post('/storemenus','MenuController@store')->name('storemenus');