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
        Post::where('id', 4)->delete();

        dd('success');
    }
}
