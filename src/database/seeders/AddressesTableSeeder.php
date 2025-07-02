<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('addresses')->insert([
        [
            'address' => '4946 Bernardo Street Tampa, FL 33602',
            'user_id' => 1,
            'created_at' => null,
            'updated_at' => null,
        ],
        [
            'address' => '1279 Aspen Court Austin, TX 73301',
            'user_id' => 2,
            'created_at' => null,
            'updated_at' => null,
        ],
        [
            'address' => '3421 Rosewood Lane Denver, CO 80203',
            'user_id' => 3,
            'created_at' => null,
            'updated_at' => null,
        ],
        [
            'address' => '883 Oak Avenue Seattle, WA 98101',
            'user_id' => 4,
            'created_at' => null,
            'updated_at' => null,
        ],
    ]);
    }
}
