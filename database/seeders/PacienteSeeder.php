<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Paciente;

class PacienteSeeder extends Seeder
{
    public function run()
    {
        Paciente::create([
            'nome'      => 'Luana Rodrigues',
            'cpf'       => '662.669.840-08',
            'celular'   => '(11) 9 8484-6363',
        ]);

        Paciente::create([
            'nome'      => 'Luana Rodrigues Garcia',
            'cpf'       => '662.669.840-09',
            'celular'   => '(11) 9 8484-6363',
        ]);

        Paciente::create([
            'nome'      => 'Matheus Henrique',
            'cpf'       => '795.429.940-60',
            'celular'   => '(11) 9 95432-5789',
        ]);

        Paciente::create([
            'nome'      => 'Pedro Silva',
            'cpf'       => '123.456.789-10',
            'celular'   => '(51) 9 9999-9999',
        ]);

        Paciente::create([
            'nome'      => 'Bruna Santos',
            'cpf'       => '987.654.321-00',
            'celular'   => '(41) 9 8888-8888',
        ]);
    }
}
