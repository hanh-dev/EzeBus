<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Phạm Minh Đức',
                'email' => 'minhduc.pham@example.com',
                'password' => Hash::make('password123'), // Mã hóa mật khẩu
                'phone' => '0912345678',
                'role' => 'driver',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Lê Hoàng Nam',
                'email' => 'hoangnam.le@example.com',
                'password' => Hash::make('password123'), // Mã hóa mật khẩu
                'phone' => '0987654321',
                'role' => 'driver',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
