<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
        ['id' => 1, 'name' => 'Tech',      'created_at' => null, 'updated_at' => null],
        ['id' => 2, 'name' => 'Sports',    'created_at' => null, 'updated_at' => null],
        ['id' => 3, 'name' => 'Education', 'created_at' => null, 'updated_at' => null],
        ['id' => 4, 'name' => 'Music',     'created_at' => null, 'updated_at' => null],
        ]);
    }
}
