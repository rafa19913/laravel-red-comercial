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
    return view('principal.index');
});

Route::get('/admin', function () {
    return view('administrador.index');
});


Route::get('/home', 'HomeController@index')->name('home');



Route::resource('usuarios','UsuarioController');

Auth::routes();


