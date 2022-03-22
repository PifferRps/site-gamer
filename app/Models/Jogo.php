<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jogo extends Model
{
    use HasFactory;

protected $fillable = ['cod','nome','genero_cod','produtora_cod','descricao','nota','capa'];

public function genero(){
    return $this->hasOne(Genero::class,  'cod', 'genero_cod' );
}

public function produtora(){
    return $this->hasOne(Produtora::class, 'cod', 'produtora_cod');
}

}
