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

Route::get('/atividades/{id}','AtividadeController@show');

Route::get('/atividades','AtividadeController@index');






//php artisan key:generate
//composer dump-autoload
//php artisan migrate --seed