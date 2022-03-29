<?php

use Illuminate\Auth\Access\Gate;
use Illuminate\Support\Facades\Gate as FacadesGate;
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

/*Route::get('/index', function () {
    return view('index');
});*/

Route::get('index' , 'App\Http\Controllers\UsuariosController@mostrarJogos')->name('index');
Route::get('ordemAlfa' , 'App\Http\Controllers\UsuariosController@ordemAlfa');
Route::get('ordemProdutora' , 'App\Http\Controllers\UsuariosController@ordemProdutora');
Route::get('ordemNa' , 'App\Http\Controllers\UsuariosController@ordemNa');
Route::get('ordemNb' , 'App\Http\Controllers\UsuariosController@ordemNb');
Route::post('pesquisar' , 'App\Http\Controllers\UsuariosController@pesquisar');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  //  $user = auth()->user();
 
    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/teste', function () {
    if (! Gate::allows('realizar-venda')) {
      return 'voce n esta autorizado';
    }else{
        return 'voce esta outorizado';
    }
})->name('dashboard');