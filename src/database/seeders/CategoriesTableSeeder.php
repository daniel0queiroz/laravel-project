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
        ['name' => 'News', 'created_at' => null, 'updated_at' => null],
        ['name' => 'Tech', 'created_at' => null, 'updated_at' => null],
        ['name' => 'Education', 'created_at' => null, 'updated_at' => null],
        ]);
    }
}
