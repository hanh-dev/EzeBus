<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DriverBuses extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('busdrivers')->insert([
            [
                'user_id' => 3,
                'license_number' => 'DL12345678',
                'license_expiry' => '2027-06-15',
                'status' => 'available',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'user_id' => 4,
                'license_number' => 'DL87654321',
                'license_expiry' => '2026-09-20',
                'status' => 'on_trip',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
