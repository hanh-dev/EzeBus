<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('trips')->insert([
            [
                'bus_id' => 10,
                'driver_id' => 1,
                'departure_time' => now()->addDays(1),
                'arrival_time' => now()->addDays(1)->addHours(3),
                'price' => 200000,
                'status' => 'scheduled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'bus_id' => 11,
                'driver_id' => 2,
                'departure_time' => now()->addDays(2),
                'arrival_time' => now()->addDays(2)->addHours(2),
                'price' => 150000,
                'status' => 'scheduled',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
