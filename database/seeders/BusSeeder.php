<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('buses')->insert([
            [
                'route_id' => 1, // Quảng Trị - Đà Nẵng
                'name' => 'Phương Trang',
                'bus_number' => 'PT-101',
                'capacity' => 45,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'route_id' => 2, // Hà Nội - Hải Phòng
                'name' => 'Hoàng Long',
                'bus_number' => 'HL-202',
                'capacity' => 50,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'route_id' => 3, // TP.HCM - Cần Thơ
                'name' => 'Thành Bưởi',
                'bus_number' => 'TB-303',
                'capacity' => 40,
                'status' => 'inactive',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'route_id' => 4, // Đà Lạt - Nha Trang
                'name' => 'Mai Linh',
                'bus_number' => 'ML-404',
                'capacity' => 42,
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);      
    }
}
