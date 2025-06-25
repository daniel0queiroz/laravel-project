<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        DB::table('posts')->insert([
            [
            'title' => 'This is a test Data',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum reprehenderit dicta explicabo autem aut magnam dignissimos voluptates nisi quis assumenda incidunt dolorem praesentium, dolore sint possimus voluptatem nostrum expedita quos.',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 1
            ],
            [
            'title' => 'This is a test Data 2',
            'description' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Dolorum reprehenderit dicta explicabo autem aut magnam dignissimos voluptates nisi quis assumenda incidunt dolorem praesentium, dolore sint possimus voluptatem nostrum expedita quos.',
            'status' => 1,
            'publish_date' => date('Y-m-d'),
            'user_id' => 1
        ]
        ]);

        dd('success');
    }
}
