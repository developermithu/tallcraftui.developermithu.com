<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $users = [
            ['name' => 'Taylor Otwell', 'email' => 'Taylor@gmail.com', 'password' => 'password', 'is_active' => true],
            ['name' => 'Nuno Maduro', 'email' => 'Nuno@gmail.com', 'password' => 'password', 'is_active' => true],
            ['name' => 'Caleb Porzio', 'email' => 'Caleb@gmail.com', 'password' => 'password', 'is_active' => true],
            ['name' => 'Jeffrey Way', 'email' => 'Jeffrey@gmail.com', 'password' => 'password', 'is_active' => true],
            ['name' => 'Developer Mithu', 'email' => 'Mithu@gmail.com', 'password' => 'password', 'is_active' => true],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }

        User::factory(5)->create();
    }
}
