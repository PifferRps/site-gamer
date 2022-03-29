<?php

namespace Database\Seeders;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::insert([
            [
                'name' => 'cadastrar_produto'
            ],
            [
                'name' => 'editar_produto'
            ],
            [
                'name' => 'ver_produto'
            ],
            [
                'name' => 'excluir_produto'
            ],  
            [
                'name' => 'alterar_estoque'
            ],        
            [
                'name' => 'realizar_venda'
            ],  
            
        ]);
    }
}
