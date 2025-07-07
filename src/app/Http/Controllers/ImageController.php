<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageController extends Controller
{
    public function handleImage(Request $request)
    {
        $request->validate([
            'image' => ['required', 'min:100', 'max:1000', 'mimes:png,jpg,gif'], // 500KB
        ]);
        $request->image->storeAs('/images', 'new_image2.jpg', 'public');

        return redirect('/success');
    }
}
