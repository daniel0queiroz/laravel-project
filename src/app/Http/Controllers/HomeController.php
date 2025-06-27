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
        $post = Post::where('id', 2)->first();
        $post->title = 'This is a new title';
        $post->description = 'this is a new description!';
        $post->save();

        dd('success');
    }
}
