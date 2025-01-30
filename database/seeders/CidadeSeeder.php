<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cidade;

class CidadeSeeder extends Seeder
{
    public function run()
    {
        Cidade::create([
            'nome'   => 'Pelotas',
            'estado' => 'RS',
        ]);

        Cidade::create([
            'nome'   => 'São Paulo',
            'estado' => 'SP',
        ]);

        Cidade::create([
            'nome'   => 'Curitiba',
            'estado' => 'PR',
        ]);
    }
}
