<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $seats = [];

        $seatNumbers = ['A1', 'A2', 'A3', 'B1', 'B2', 'B3', 'C1', 'C2', 'C3', 'D1', 'D2', 'D3'];

        foreach ($seatNumbers as $seat) {
            $seats[] = [
                'bus_id' => 10,
                'seat_number' => '10-' . $seat,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        
        foreach ($seatNumbers as $seat) {
            $seats[] = [
                'bus_id' => 13,
                'seat_number' => '13-' . $seat,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }

        DB::table('seats')->insert($seats);
    }
}
