<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([
            [
                "user_id"   =>  1,
                "titre"     =>  "Just a simple blog post",
                "validate"  =>  1,
                "trash"     =>  0,
                "image"     =>  "blog-1.jpg",
                "article"   =>  "lorem10",
                "categorie_id"  =>  1,
                "tag_id"        =>  1,
                "created_at"    =>  now(),
            ],
            [
                "user_id"   =>  3,
                "titre"     =>  "Just a simple blog post",
                "validate"  =>  1,
                "trash"     =>  0,
                "image"     =>  "blog-3.jpg",
                "article"   =>  "lorem10",
                "categorie_id"  =>  3,
                "tag_id"        =>  3,
                "created_at"    =>  now(),
            ],
            [
                "user_id"   =>  2,
                "titre"     =>  "Just a simple blog post",
                "validate"  =>  1,
                "trash"     =>  0,
                "image"     =>  "blog-2.jpg",
                "article"   =>  "lorem10",
                "categorie_id"  =>  2,
                "tag_id"        =>  2,
                "created_at"    =>  now(),
            ],
        ]);
    }
}
