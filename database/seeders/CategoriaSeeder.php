<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Categoria::create([
            'nome' => 'Trabalho'
        ]);
        Categoria::create([
            'nome' => 'Estudos'
        ]);
        Categoria::create([
            'nome' => 'Pessoal e Lazer'
        ]);
        Categoria::create([
            'nome' => 'Saúde'
        ]);
        Categoria::create([
            'nome' => 'Finanças'
        ]);
        Categoria::create([
            'nome' => 'Casa'
        ]);
        Categoria::create([
            'nome' => 'Compras'
        ]);
        Categoria::create([
            'nome' => 'Família'
        ]);
    }
}
