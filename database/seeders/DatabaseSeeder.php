<?php

namespace Database\Seeders;


use App\Models\User;
use App\Models\Blog;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@pranab.com',
            'password' => 'pranab',
        ]);

        Blog::factory();
    }
}
