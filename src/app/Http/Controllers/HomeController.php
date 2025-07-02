<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {   
        // Post::withTrashed()->find(2)->forceDelete();
        // return Post::all();
        // Post::withTrashed()->find(3)->restore();

        // dd('success');
        return Post::onlyTrashed()->get();
    }
}
