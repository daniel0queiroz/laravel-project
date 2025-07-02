<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        [
            'name' => 'User One',
            'email' => 'user1@example.com',
            'email_verified_at' => null,
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => null,
            'updated_at' => null,
        ],
        [
            'name' => 'User Two',
            'email' => 'user2@example.com',
            'email_verified_at' => null,
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => null,
            'updated_at' => null,
        ],
        [
            'name' => 'User Three',
            'email' => 'user3@example.com',
            'email_verified_at' => null,
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => null,
            'updated_at' => null,
        ],
        [
            'name' => 'User Four',
            'email' => 'user4@example.com',
            'email_verified_at' => null,
            'password' => bcrypt('password'),
            'remember_token' => Str::random(10),
            'created_at' => null,
            'updated_at' => null,
        ],
    ]);
    }
}
