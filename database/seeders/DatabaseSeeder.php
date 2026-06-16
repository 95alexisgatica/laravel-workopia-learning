<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        //truncamos las tablas para evitar duplicados
        DB::table('users')->truncate();
        DB::table('job_listings')->truncate();

        $this->call([
            RandomUserSeeder::class,
            JobSeeder::class,
            RandomJobSeeder::class,
        ]);
    }
}
