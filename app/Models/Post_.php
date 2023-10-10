<?php

namespace App\Models;



class Post 
{
    private static $blog_post = [
        [
            "title" => "Judul post pertama",
            "slug" => "judul-post-pertama",
            "author" => "Nayla Daffilla",
            "body" => "nama saya nayla daffilla kelas XI-RPL",
            
        ],
    
        [
            "title" => "Judul post kedua",
            "slug" => "judul-post-kedua",
            "author" => "Nayla eka",
            "body" => "nama saya nayla eka kelas XI-RPL.",
     
        ],

        [
            "title" => "Judul post ketiga",
            "slug" => "judul-post-ketiga",
            "author" => "Meisya handrina",
            "body" => "nama saya meisya kelas XI-RPL.",
     
        ]
        ];

        public static function all()
        {
            return collect(self::$blog_post);
        }

        public static function find($slug)
        {
            $posts = static::all();
            return $posts->firstWhere('slug', $slug);
            }
        }
