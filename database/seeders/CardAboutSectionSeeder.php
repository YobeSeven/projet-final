<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardAboutSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_about_sections')->insert([
            [   
                "icone_card"    =>  "flaticon-023-flask",
                "titre_card"    =>  "Get in the lab",
                "texte_card"    =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"    =>  now(),
            ],
            [
                "icone_card"    =>  "flaticon-011-compass",
                "titre_card"    =>  "Projects online",
                "texte_card"    =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"    =>  now(),
            ],
            [
                "icone_card"    =>  "flaticon-037-idea",
                "titre_card"    =>  "SMART MARKETING",
                "texte_card"    =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
                "created_at"    =>  now(),
            ],
        ]);
    }
}
