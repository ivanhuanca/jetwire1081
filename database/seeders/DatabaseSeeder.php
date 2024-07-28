<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Ivan Diego Huanca Pajuelo',
            'email' => 'ivandhp@gmail.com',
            'password' => bcrypt('cdjxdvRDnrJneXpSajD+rCtMlQBBUwv7K6TnfmbEW+Q='),
            'email_verified_at' => '2024-07-28 22:40:34',
            'remember_token' => 'jooWScA1QP',
            'created_at' => '2024-07-28 22:40:34',
            'updated_at' => '2024-07-28 22:40:34',
        ]);

        // Call the SessionSeeder
        $this->call(SessionSeeder::class);

    }
}
