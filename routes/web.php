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
    return view('welcome');
});

Route::get('/pagina', function () {
    return view('pagina');
});

Route::get('/pagina2', function () {
    return view('pagina2');
});

Route::get('/pagina3', function () {
    return view('pagina3');
});

Route::get('/ordem cronologica', function () {
    return view('ordem cronologica');
});

Route::get('/equipe', function () {
    return view('equipe');
});

Route::get('/teoria', function () {
    return view('teoria');
});

Route::get('/podcast', function () {
    return view('podcast');
});

Route::get('/fotos', function () {
    return view('fotos');
});

Route::get('/clarin diario', function () {
    return view('clarin diario');
});

Route::get('/clarin diario 2', function () {
    return view('clarin diario 2');
});

Route::get('/clarin diario 3', function () {
    return view('clarin diario 3');
});

Route::get('/clarin diario 4', function () {
    return view('clarin diario 4');
});

Route::get('/aranhaverso', function () {
    return view('aranhaverso');
});

Route::get('/game', function () {
    return view('game');
});

Route::get('/game go', function () {
    return view('game go');
});

Route::get('/game vitoria', function () {
    return view('game vitoria');
});

Route::get('/game over', function () {
    return view('game over');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
