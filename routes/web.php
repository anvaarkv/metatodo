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

//Route::get('/', function () {
//    return view('welcome');
//});


Route::prefix('')->group(function () {

    Route::get('/', 'TodoController@index')->name('todo.list');
    Route::get('/create', 'TodoController@create')->name('todo.create');
    Route::post('/store','TodoController@store')->name('todo.store');
    Route::post('/show','TodoController@store')->name('todo.show');
});
