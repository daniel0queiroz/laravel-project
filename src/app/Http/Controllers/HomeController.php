<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\MyPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
       /**
        * 1. Retrieving all data
        * 2. Retrieving single data
        * 3. Retrieving a single data or throw error
        */

        // return Post::all(); // DB::table('posts')->get()

        // return $post = Post::findOrFail(4);

        $posts = Post::all();

        foreach($posts as $post) {
            echo $post->title;
        }
    }
}
