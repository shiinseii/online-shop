<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('brands')->insert([
            [
            'name' => 'Logitech',
            'address' => 'www.logitech.com',
            'created_at' => $now,
            'updated_at' => $now,
        ],
            [
            'name' => 'Asus',
            'address' => 'www.asus.com',
            'created_at' => $now,
            'updated_at' => $now,
        ],
            [
            'name' => 'Samsung',
            'address' => 'www.samsung.com',
            'created_at' => $now,
            'updated_at' => $now,
        ],
            [
            'name' => 'LG',
            'address' => 'www.lg.com',
            'created_at' => $now,
            'updated_at' => $now,
        ],
    ]);
    }
}
