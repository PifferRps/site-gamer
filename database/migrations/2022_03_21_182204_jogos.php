<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jogos', function(Blueprint $table){
            $table->id('cod');
            $table->string('nome', 40);
            $table->integer('genero');
            $table->integer('produtora');
            $table->text('descricao');
            $table->decimal('nota', 4,2);
            $table->string('capa', 40);

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('jogos');
    }
};
