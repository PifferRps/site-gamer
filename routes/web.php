<?php



use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Gate;

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

Route::get('login', function () {
    return view('login');
});


Route::get('/alerta', function () {
    return view('alerta');
});

Route::get('index', 'App\Http\Controllers\UsuariosController@mostrarJogos')->name('index');
Route::get('ordemAlfa', 'App\Http\Controllers\UsuariosController@ordemAlfa');
Route::get('ordemProdutora', 'App\Http\Controllers\UsuariosController@ordemProdutora');
Route::get('ordemNa', 'App\Http\Controllers\UsuariosController@ordemNa');
Route::get('ordemNb', 'App\Http\Controllers\UsuariosController@ordemNb');
Route::post('pesquisar', 'App\Http\Controllers\UsuariosController@pesquisar');

Route::get('registro', 'App\Http\Controllers\RegistroController@getValidate');
Route::post('registro', 'App\Http\Controllers\RegistroController@postValidate');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    //  $user = auth()->user();

    return view('dashboard');
})->name('dashboard');


Route::middleware(['auth:sanctum', 'verified'])->get('/teste', function () {
    if (!Gate::allows('realizar-venda')) {
        return 'voce n esta autorizado';
    } else {
        return 'voce esta outorizado';
    }
})->name('dashboard');
