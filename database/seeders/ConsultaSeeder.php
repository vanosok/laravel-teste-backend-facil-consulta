<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consulta;

class ConsultaSeeder extends Seeder
{
    public function run()
    {
        Consulta::create([
            'medico_id'   => 3,
            'paciente_id' => 1,
            'data'        => '2025-01-29 09:30:00',
        ]);

        Consulta::create([
            'medico_id'   => 1,
            'paciente_id' => 4,
            'data'        => '2023-01-01 14:00:00',
        ]);

        Consulta::create([
            'medico_id'   => 6,
            'paciente_id' => 2,
            'data'        => '2025-02-15 10:00:00',
        ]);

        Consulta::create([
            'medico_id'   => 1,
            'paciente_id' => 2,
            'data'        => '2023-01-01 14:00:00',
        ]);

        Consulta::create([
            'medico_id'   => 1,
            'paciente_id' => 1,
            'data'        => '2023-01-01 14:00:00',
        ]);
    }
}
