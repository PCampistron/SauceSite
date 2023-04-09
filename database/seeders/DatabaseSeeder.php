<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        \App\Models\Sauce::create(
            [
                'userId' => 1,
                'name' => 'Sauce',
                'manufacturer' => 'Sauceur',
                'description' => 'Bonne sauce',
                'mainPepper' => 'piment',
                'imageUrl' => 'sauceTabasco.jpg',
                'heat' => 5,
                'likes' => 0,
                'dislikes' => 0
            ]
            );
    }
}
