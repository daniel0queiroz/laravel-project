<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    DB::table('posts')->insert([
        [
            'title' => 'Post 1',
            'description' => 'this is a test description',
            'status' => 1,
            'user_id' => 1,
            'category_id' => 1,
            'publish_date' => null,
            'created_at' => null,
            'updated_at' => null,
        ],
        [
            'title' => 'Post 2',
            'description' => 'this is a test description',
            'status' => 1,
            'user_id' => 1,
            'category_id' => 2,
            'publish_date' => null,
            'created_at' => null,
            'updated_at' => null,
        ],
        [
            'title' => 'Post 3',
            'description' => 'this is a test description',
            'status' => 1,
            'user_id' => 1,
            'category_id' => 3,
            'publish_date' => null,
            'created_at' => null,
            'updated_at' => null,
        ],
        ]);
    }   
}
