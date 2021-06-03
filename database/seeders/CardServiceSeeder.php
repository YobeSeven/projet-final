<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CardServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('card_services')->insert([
            [
                "image_card"    =>  "card-1.jpg",
                "titre_card"    =>  "Get in the lab",
                "texte_card"    =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "image_card"    =>  "card-2.jpg",
                "titre_card"    =>  "Projects online",
                "texte_card"    =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
            [
                "image_card"    =>  "card-3.jpg",
                "titre_card"    =>  "SMART MARKETING",
                "texte_card"    =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla..",
            ],
        ]);
    }
}
