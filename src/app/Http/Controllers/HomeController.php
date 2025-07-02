<?php

namespace App\Http\Controllers;

use App\Models\Address;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {   
        // post - may have many tags

        // tag - may have many posts 

        // pivot table


        $posts = Post::with('tags')->get();

        $tag = Tag::first();

        // $categories = Category::find(3)->posts;
         
        return view('home', compact('posts'));
    }
}
