<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MoonshineUserSeeder extends Seeder
{
    public function run()
    {
        DB::table('moonshine_users')->insert([
            [
                'name' => 'James',
                'email' => 'mosquera@gmail.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Coordinador',
                'email' => 'coordinador@palace.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Vendedor',
                'email' => 'vendedor@palace.com',
                'password' => Hash::make('password123'),
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'name' => 'Usuario Test',
                'email' => 'test@palace.com',
                'password' => Hash::make('password123'),
                'role_id' => 2, // El ID del rol (ajusta según corresponda)
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
