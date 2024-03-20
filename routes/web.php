<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('home',[
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about',
    [
        "title" => "About",
        "name" => "raihan GAH",
        "email" => "raihangah@gmail.com",
        "img" => "logo.png"
    ]);
});



Route::get('/blog', [PostController::class, 'index']);

Route::get('blog/{slug}', [PostController::class, 'show']);
