<?php

namespace App\Http\Repositories;

use App\Models\Jogo;

class JogoRepository
{
    public static function getJogos()
    {
        return Jogo::join('produtoras', 'jogos.produtora_cod', 'produtoras.cod')
        ->orderBy('produtoras.produtora', 'asc')
        ->get();

    }

 
}

//?string $ordem = null  select * from `jogos` inner join `produtoras8` on `jogos`.`produtora_cod` = `produtoras`.`cod` order by `produtoras`.`produtora` asc