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

#Route::get('/', function () {
#    return view('welcome');
#});

Route::get('/', function(){
    return view('home.login');
})->name('home');

Route::get('/registrar', function(){
    return view('home.registro');
})->name('registrar');

Route::post('/usuario/criar',
	'UsuarioController@criar');

Route::post('/entrar', 'UsuarioController@entrar');

Route::get('/item/listar', 'ItemController@listar');