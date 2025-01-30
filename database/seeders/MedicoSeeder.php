<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Medico;

class MedicoSeeder extends Seeder
{
    public function run()
    {
        Medico::create([
            'nome'          => 'Larissa Oliveira',
            'especialidade' => 'Cardiologia',
            'cidade_id'     => 1, 
        ]);

        Medico::create([
            'nome'          => 'Cristina Ariane Grego',
            'especialidade' => 'Neurologia',
            'cidade_id'     => 1, 
        ]);

        Medico::create([
            'nome'          => 'Dr. Antônio Costa',
            'especialidade' => 'Cardiologista',
            'cidade_id'     => 1, 
        ]);

        Medico::create([
            'nome'          => 'Aurora Delgado',
            'especialidade' => 'Dermatologia',
            'cidade_id'     => 2, 
        ]);

        Medico::create([
            'nome'          => 'Vitória Gomes',
            'especialidade' => 'Cardiologia',
            'cidade_id'     => 2,
        ]);

        Medico::create([
            'nome'          => 'Dra. Alessandra Moura',
            'especialidade' => 'Neurologista',
            'cidade_id'     => 2, 
        ]);

        Medico::create([
            'nome'          => 'Marcelo',
            'especialidade' => 'Neurologia',
            'cidade_id'     => 3,
        ]);
    }
}
