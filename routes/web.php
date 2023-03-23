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



Route::get('/produtos/novo', 'App\Http\Controllers\ProdutosController@create'); //cadastrar no banco
Route::post('/produtos/novo', 'App\Http\Controllers\ProdutosController@store')->name('registrar_produto'); //salvar no banco

//Route::get('/produtos/ver/{id}', 'App\Http\Controllers\ProdutosController@show'); //Ler um registro
Route::get('/produtos/ver', 'App\Http\Controllers\ProdutosController@show');