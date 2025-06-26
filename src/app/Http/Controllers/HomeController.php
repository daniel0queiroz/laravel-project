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
    //    return Post::where('views', '>', 100)->where('id', '=', 2)->get();
       return Post::where('views', '>', 400)->orWhere('id', '=', 2)->get();
    }
}
