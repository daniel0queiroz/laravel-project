<?php

namespace Database\Seeders;

use Carbon\Carbon;
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
        $posts = [];
        
        for ($i = 1; $i <= 200; $i++) {
            $posts[] = [
            'title' => "Post $i",
            'description' => 'This is a test post description.',
            'status' => rand(0, 1),
            'user_id' => 1, // or random if needed
            'category_id' => rand(1, 4), // random category
            'views' => rand(0, 500),
            'publish_date' => Carbon::create(rand(1990, 2005), rand(1, 12), rand(1, 28))->format('Y-m-d'),
            'created_at' => Carbon::create(2022, 12, 2, 11, 12, 53)->format('Y:m-d H:i:s'),
            'updated_at' => Carbon::create(2022, 12, 2, 11, 12, 53)->format('Y:m-d H:i:s'),
            ];
        }

        DB::table('posts')->insert($posts);
    }
}
