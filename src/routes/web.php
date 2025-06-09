<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('about', function() {
    $about = "This is about page";
    $about2 = "This is about two";
    return view('about', compact('about', 'about2')); //['about' => $about]
});

Route::get('contact', function() {
    return view('contact');
});

/**
 * M V C
 * -----
 * M = Model
 * V = Views
 * C = Controller
 */



