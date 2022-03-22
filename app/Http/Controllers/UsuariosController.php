<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class UsuariosController extends Controller
{
    public function mostrarJogos(){
        $jogo = Jogo::all();
      
        return view('index', compact('jogo'));
    }

    
}
