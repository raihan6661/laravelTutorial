<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "judul pertama",
            "slug" => "judul_Post_Pertama",
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
            "slug" => "judul_Post_Kedua",
            "author" => "panji",
            "body" => "  Lorem ipsum dolor sit amet consectetur adipisicing elit. Dignissimos doloremque facere illo animi sed. 
            Suscipit ab dolores sequi ex sint. Voluptate esse saepe quae sint tempora quis praesentium veritatis ab 
            porro repellendus expedita consequuntur aspernatur et quibusdam, earum soluta, veniam debitis ratione eius 
            obcaecati impedit facilis, rerum cum repudiandae? Vel ducimus expedita voluptate illum incidunt deserunt. 
            Cumque, quisquam id cum in optio repellendus maiores perferendis non velit vel numquam eum, porro est molestiae 
            quasi voluptatem ipsa? Optio, perferendis. Eos, esse?"
        ]
    ];
    public static function all(){
        return collect(self::$blog_posts);
    }

    public static function find($slug){
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }
}
