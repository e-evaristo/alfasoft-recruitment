<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@email.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);

        User::create([
            'name' => 'Usuário Legal',
            'email' => 'user@email.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
        ]);
    }
}
