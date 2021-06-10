<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tags')->insert([
            [
                "nom_tag"   =>  "article",
                "created_at"        =>  now(),
            ],
            [
                "nom_tag"   =>  "for people",
                "created_at"        =>  now(),
            ],
            [
                "nom_tag"   =>  "interview",
                "created_at"        =>  now(),
            ],
            [
                "nom_tag"   =>  "new",
                "created_at"        =>  now(),
            ],
        ]);
    }
}
