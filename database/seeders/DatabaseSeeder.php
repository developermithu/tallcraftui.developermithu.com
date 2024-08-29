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
        // User::factory(50)->create();

        $users = [
            ['name' => 'Taylor Otwell', 'email' => 'Taylor@gmail.com', 'password' => 'password'],
            ['name' => 'Nuno Maduro', 'email' => 'Nuno@gmail.com', 'password' => 'password'],
            ['name' => 'Caleb Porzio', 'email' => 'Caleb@gmail.com', 'password' => 'password'],
            ['name' => 'Jeffrey Way', 'email' => 'Jeffrey@gmail.com', 'password' => 'password'],
            ['name' => 'Developer Mithu', 'email' => 'Mithu@gmail.com', 'password' => 'password'],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }
    }
}
