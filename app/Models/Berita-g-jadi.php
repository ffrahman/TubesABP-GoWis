<?php

namespace App\Models;



class Berita
{
    private static $posts = [
        [
            "judul" => "Judul Pertama",
            "slug" => "judul-pertama",
            "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae minus saepe numquam pariatur rerum maxime dicta? Vitae in quis iusto ad, obcaecati magni eos possimus quisquam omnis distinctio cupiditate sit!",
        ],
        [
            "judul" => "Judul Kedua",
            "slug" => "judul-kedua",
            "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae minus saepe numquam pariatur rerum maxime dicta? Vitae in quis iusto ad, obcaecati magni eos possimus quisquam omnis distinctio cupiditate sit!",
        ],
        [
            "judul" => "Judul Ketiga",
            "slug" => "judul-ketiga",
            "isi" => "Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestiae minus saepe numquam pariatur rerum maxime dicta? Vitae in quis iusto ad, obcaecati magni eos possimus quisquam omnis distinctio cupiditate sit!",
        ],
    ];

    public static function all()
    {
        return collect(self::$posts);
    }

    public static function find($slug)
    {
        $posts = static::all();
        // $new_berita = [];
        // foreach (self::$posts as $post) {
        //     if ($post['slug'] === $slug) {
        //         $new_berita = $post;
        //     }
        // }

        return $posts->firstWhere('slug', $slug);
    }
}