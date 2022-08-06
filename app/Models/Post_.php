<?php

namespace App\Models;


class Post
{
   private static $blog_posts = [
    [
        "title" => "Judul Post Pertama",
        "slug" =>"judul-post-pertama",
        "author" => "Natasya Alvianita",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio iste minima, magnam culpa ex recusandae quas cumque eaque nihil placeat iusto reiciendis fugit, fuga, doloremque dolorum expedita. Saepe, fugit. Ducimus."
    ],
    [
        "title" => "Judul Post Kedua",
        "slug"=> "judul-post-kedua",
        "author" => "Nining S",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio iste minima, magnam culpa ex recusandae quas cumque eaque nihil placeat iusto reiciendis fugit, fuga, doloremque dolorum expedita. Saepe, fugit. Ducimus."
        ]
    ];

    public static function all()
    {
        return collect(self::$blog_posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        return $posts->firstWhere('slug', $slug);
    }


}
