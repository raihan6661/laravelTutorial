<?php

use Illuminate\Support\Facades\Route;


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
        "img" => "logos.png"
    ]);
});



Route::get('/blog', function () {
    $blog_spot = [
        [
            "title" => "judul pertama",
            "author" => "Raihan",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos doloremque facere illo animi sed. 
            Suscipit ab dolores sequi ex sint. Voluptate esse saepe quae sint tempora quis praesentium veritatis ab 
            porro repellendus expedita consequuntur aspernatur et quibusdam, earum soluta, veniam debitis ratione eius 
            obcaecati impedit facilis, rerum cum repudiandae? Vel ducimus expedita voluptate illum incidunt deserunt. 
            Cumque, quisquam id cum in optio repellendus maiores perferendis non velit vel numquam eum, porro est molestiae 
            quasi voluptatem ipsa? Optio, perferendis. Eos, esse?"
        ],
        [
            "title" => "judul kedua",
            "author" => "panji",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos doloremque facere illo animi sed. 
            Suscipit ab dolores sequi ex sint. Voluptate esse saepe quae sint tempora quis praesentium veritatis ab 
            porro repellendus expedita consequuntur aspernatur et quibusdam, earum soluta, veniam debitis ratione eius 
            obcaecati impedit facilis, rerum cum repudiandae? Vel ducimus expedita voluptate illum incidunt deserunt. 
            Cumque, quisquam id cum in optio repellendus maiores perferendis non velit vel numquam eum, porro est molestiae 
            quasi voluptatem ipsa? Optio, perferendis. Eos, esse?"
        ]
    ];

    return view('Blog',
    [
        "title" => "Blog",
        "posts" => $blog_spot
    ]);
});
