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
       DB::table('posts')->where('id', 55)->update([
            'title' => 'hey we updated our title the id is 55',
            'description' => 'this is a update description the id is 59',
       ]);

       dd('success');
    }
}
