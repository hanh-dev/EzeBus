<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;

class RatingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('ratings')->insert([
            [
                'user_id' => 1,
                'trip_id' => 1,
                'rating' => 5,
                'comment' => 'Chuyến đi tuyệt vời! Tài xế rất thân thiện.',
                'created_at' => Carbon::now(),
            ],
            [
                'user_id' => 2,
                'trip_id' => 1,
                'rating' => 4,
                'comment' => 'Dịch vụ tốt, nhưng xe hơi cũ.',
                'created_at' => Carbon::now(),
            ]
        ]);
    }
}
