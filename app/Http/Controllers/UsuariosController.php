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


    public function ordemAlfa(){
        $jogo= Jogo::orderby('nome','asc')->get();
      
        return view('index', compact('jogo'));
    }
   
    public function ordemProdutora(){
        $jogo= Jogo::orderby('produtora','asc')->get();
      
        return view('index', compact('jogo'));
    }
   
    public function ordemNa(){
        $jogo= Jogo::orderby('nota','desc')->get();
      
        return view('index', compact('jogo'));
    }
   
    public function ordemNb(){
        $jogo= Jogo::orderby('nota','asc')->get();
      
        return view('index', compact('jogo'));
    }
   

    
}
