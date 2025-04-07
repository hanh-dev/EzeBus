<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StopsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stops = [
            // Quảng Trị - Đà Nẵng (route_id = 1)
            ['route_id' => 1, 'stop_name' => 'Đông Hà', 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 1, 'stop_name' => 'Huế', 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 1, 'stop_name' => 'Hầm Hải Vân', 'created_at' => now(), 'updated_at' => now()],

            // Hà Nội - Hải Phòng (route_id = 2)
            ['route_id' => 2, 'stop_name' => 'Gia Lâm', 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 2, 'stop_name' => 'Hải Dương', 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 2, 'stop_name' => 'Quán Toan', 'created_at' => now(), 'updated_at' => now()],

            // TP.HCM - Cần Thơ (route_id = 3)
            ['route_id' => 3, 'stop_name' => 'Bình Chánh', 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 3, 'stop_name' => 'Mỹ Tho', 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 3, 'stop_name' => 'Vĩnh Long', 'created_at' => now(), 'updated_at' => now()],

            // Đà Lạt - Nha Trang (route_id = 4)
            ['route_id' => 4, 'stop_name' => 'Đức Trọng', 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 4, 'stop_name' => 'Di Linh', 'created_at' => now(), 'updated_at' => now()],
            ['route_id' => 4, 'stop_name' => 'Khánh Vĩnh', 'created_at' => now(), 'updated_at' => now()],
        ];

        DB::table('stops')->insert($stops);
    }
}
