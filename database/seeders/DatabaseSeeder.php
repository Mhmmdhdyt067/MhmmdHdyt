<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(100)->create();

        // User::factory()->create([
        //     'name' => 'Administrator',
        //     'username' => 'admin',
        //     'is_admin' => 1,
        //     'email' => 'admin@example.com',
        //     'password' => bcrypt('admin'),
        // ]);
    }
}
