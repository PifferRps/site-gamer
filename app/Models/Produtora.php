<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtora extends Model
{
    use HasFactory;
    protected $fillable = ['cod', 'produtora', 'pais'];
    
    //public function jogo(){
      //  return $this->belongsTo(Jogos::class  , 'produtora_cod', 'cod' );
    // return $this->belongsTo(Jogos::class   ,  'cod','produtora_cod' );
  //  }
}