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
            [
                'name' => 'Taylor Otwell',
                'email' => 'taylor@laravel.com',
                'password' => 'password',
                'is_active' => true,
                'bio' => 'Creator of Laravel.'
            ],
            [
                'name' => 'Caleb Porzio',
                'email' => 'calebporzio@gmail.com',
                'password' => 'password',
                'is_active' => true,
                'bio' => 'Creator of Alpine.js and Laravel Livewire.'
            ],
            [
                'name' => 'Nuno Maduro',
                'email' => 'nunomaduro@gmail.com',
                'password' => 'password',
                'is_active' => true,
                'bio' => 'Creator of Pest PHP.'
            ],
            [
                'name' => 'Povilas Korop',
                'email' => 'povilas@laraveldaily.com',
                'password' => 'password',
                'is_active' => true,
                'bio' => 'Creator of Laravel Daily.'
            ],
            [
                'name' => 'Developer Mithu',
                'email' => 'developermithu@gmail.com',
                'password' => 'password',
                'is_active' => true,
                'bio' => 'Creator of TallCraftUI.'
            ],
        ];

        foreach ($users as $user) {
            User::factory()->create($user);
        }

        User::factory(5)->create();
    }
}
