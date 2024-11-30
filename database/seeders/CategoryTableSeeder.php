<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = now();

        DB::table('categories')->insert([
            [
            'name' => 'Laptop',
            'created_at' => $now,
            'updated_at' => null,
        ],
            [
            'name' => 'Monitor',
            'created_at' => $now,
            'updated_at' => null,
        ],
            [
            'name' => 'Mouse',
            'created_at' => $now,
            'updated_at' => null,
        ],
            [
            'name' => 'Keyboard',
            'created_at' => $now,
            'updated_at' => null,
        ],
            [
            'name' => 'Console',
            'created_at' => $now,
            'updated_at' => null,
        ],
    ]);
    }
}
