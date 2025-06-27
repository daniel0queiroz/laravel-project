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
        $post = new Post();

        $post->title = 'post 4';
        $post->description = 'this is a test description';
        $post->status = 1;
        $post->publish_date = date('Y-m-d');
        $post->user_id = 1;
        $post->category_id = 1;
        $post->views = 400;

        $post->save();

        dd('success');
    }
}
