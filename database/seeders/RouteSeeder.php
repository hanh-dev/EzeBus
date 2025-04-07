<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RouteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('routes')->insert([
            [
                'name' => 'Quảng Trị - Đà Nẵng',
                'start_location' => 'Quảng Trị',
                'end_location' => 'Đà Nẵng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Hà Nội - Hải Phòng',
                'start_location' => 'Hà Nội',
                'end_location' => 'Hải Phòng',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'TP.HCM - Cần Thơ',
                'start_location' => 'TP.HCM',
                'end_location' => 'Cần Thơ',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Đà Lạt - Nha Trang',
                'start_location' => 'Đà Lạt',
                'end_location' => 'Nha Trang',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
