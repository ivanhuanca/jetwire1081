<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Insert a session directly into the sessions table
        // jWtuSlVOqqlBFlHFPLSfvzpYh2kWnlgMV7SZJZyi
        // 1
        // 127.0.0.1
        // Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36
        // YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2...
        // 1722205735
        DB::table('sessions')->insert([
            'id' => 'OZOOcrFXsullWfGuFFo1Po6pexfg2rK8SS5r3zNb',
            'user_id' => 1, 
            'ip_address' => '127.0.0.1',
            'user_agent' => 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/126.0.0.0 Safari/537.36',
            'payload' => 'YTo2OntzOjM6InVybCI7YTowOnt9czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjY6Il90b2tlbiI7czo0MDoid09idDh4OHpaeVRKemxZS1Q1OEQxOFlpV0hDUnlyUFVqN1pmdFBSNCI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRKRFV3N2RqSXAyTmNUVXVGdk42UmZPQzlaMU5oeXdCZTE0ek9FdHQ2NkxzcnNvTGZMUDdVSyI7fQ==',
            'last_activity' => 1722206557,
        ]);
    }
}
