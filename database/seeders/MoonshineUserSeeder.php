<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class MoonshineUserSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'name' => 'James',
                'email' => 'mosquera@gmail.com',
                'password' => Hash::make('password123'),
                'moonshine_user_role_id' => 1,
            ],
            [
                'name' => 'Coordinador',
                'email' => 'coordinador@palace.com',
                'password' => Hash::make('password123'),
                'moonshine_user_role_id' => 2,
            ],
            [
                'name' => 'Vendedor',
                'email' => 'vendedor@palace.com',
                'password' => Hash::make('password123'),
                'moonshine_user_role_id' => 3,
            ],
        ];

        foreach ($users as $user) {
            DB::table('moonshine_users')->updateOrInsert(
                ['email' => $user['email']],
                array_merge($user, [
                    'updated_at' => now(),
                ])
            );
        }
    }
}
