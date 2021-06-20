<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CommentaireSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('commentaires')->insert([
            [
                "email"         =>  "elabedayoub1234@gmail.com",
                "auteur"        =>  "ayoub elabed",
                "message"       =>  "quelque part loin du monde",
                "validate"      =>  1,
                "article_id"    =>  1,
                "created_at"    =>  now(),
            ],
            [
                "email"         =>  "monemail@gmail.com",
                "auteur"        =>  "ayoub elabed",
                "message"       =>  "quelque part proche du monde",
                "validate"      =>  1,
                "article_id"    =>  1,
                "created_at"    =>  now(),
            ],
        ]);
    }
}
