<?php

namespace App\Http\Controllers;

use App\Http\Repositories\JogoRepository;
use App\Models\Jogo;
use App\Models\Produtora;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
       /* DB::listen(function ($query) {
            echo '<pre>';
            var_dump($query->sql);
            var_dump($query->bindings);
            var_dump($query->time);
            echo '</pre>';
        });*/
        $jogo = JogoRepository::getJogos();
        $produ = 1;
        return view('index', compact('jogo','produ'));
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
