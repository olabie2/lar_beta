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
        // User::factory(10)->create();

        \App\Models\Career::factory(20)->create();
        \App\Models\Blog::factory(20)->create();
        \App\Models\CompanyEvent::factory(20)->create();
        \App\Models\EventRegisterApplication::factory()->count(20)->create();
    }
}
