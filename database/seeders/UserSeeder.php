<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name'     => 'Vinicius Moraes',
            'email'    => 'vi.moraes@example.com',
            'password' => Hash::make('password'),
        ]);

        User::create([
            'name'     => 'Christian Ramíres',
            'email'    => 'christian.ramires@example.com',
            'password' => Hash::make('password'),
        ]);
    }
}
