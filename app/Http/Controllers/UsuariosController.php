<?php

namespace App\Http\Controllers;

use App\Http\Repositories\JogoRepository;
use App\Models\Genero;
use App\Models\Jogo;
use App\Models\Produtora;
use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use League\CommonMark\Extension\CommonMark\Node\Inline\Code;
use Symfony\Component\Console\Input\Input;

class UsuariosController extends Controller
{

    public function login()
    {
        if(session()->has('usuario')){
            return redirect()->route('index');
        }
        return view('loginn');    
    }

    public function logout()
        {
            session()->forget('usuario');
            return redirect()->route('index');
            
        }

    public function entrarLogin(Request $request)
    {
        $usuario = trim($request->login);
        $senha = trim($request->senha);

        $usuario = Usuario::where('nome', $usuario)->first();
        // dd($usuario);
        if (!$usuario) {
            echo ('Nok');
            return;
        }
        if (!Hash::check($senha, $usuario->senha)) {
            echo ('NOK');
            return;
        }

        session()->put('usuario',$usuario);
        //dd(session());
        return redirect()->route('index');
    }

    public function mostrarJogos()
    {

        $jogo = Jogo::get();

        //  dd($jogo);
        return view('index', compact('jogo'));
    }

    public function mostrarDetalhes($id)
    {
        $jogo = Jogo::where('cod', $id)->get();
        //dd($jogo);
        return view('detalhes', compact('jogo'));
    }


    public function ordemAlfa()
    {
        $jogo = Jogo::orderby('nome', 'asc')->get();


        return view('index', compact('jogo'));
    }

    public function ordemProdutora()
    {
        /* DB::listen(function ($query) {
            echo '<pre>';
            var_dump($query->sql);
            var_dump($query->bindings);
            var_dump($query->time);
            echo '</pre>';
        });*/
        $jogo = JogoRepository::getJogos();
        $produ = 1;

        return view('index', compact('jogo', 'produ'));
    }

    public function ordemNa()
    {
        $jogo = Jogo::orderby('nota', 'desc')->get();

        return view('index', compact('jogo'));
    }

    public function ordemNb()
    {
        $jogo = Jogo::orderby('nota', 'asc')->get();

        return view('index', compact('jogo'));
    }

    public function pesquisar(Request $request)
    {
        $request = $request->get('nome');
        $jogo = Jogo::join('produtoras', 'jogos.produtora_cod', 'produtoras.cod')
            ->join('generos', 'jogos.genero_cod', 'generos.cod')
            ->where('nome', 'LIKE', '%' . $request . '%')
            ->orwhere('produtora', 'LIKE', '%' . $request . '%')
            ->orwhere('genero', 'LIKE', '%' . $request . '%')
            ->get();
        //dd($jogo);
        $gene = 1;
        return view('index', compact('jogo', 'gene'));
    }
}
//?string $ordem = null  select * from `jogos` inner join `produtoras8` on `jogos`.`produtora_cod` = `produtoras`.`cod` order by `produtoras`.`produtora` asc

/*Return Jogo::join('produtoras', 'jogos.produtora_cod', 'produtoras.cod')
        ->orderBy('produtoras.produtora', 'asc')
        ->get();*/