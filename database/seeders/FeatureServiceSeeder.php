<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FeatureServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('feature_services')->insert([
            [
                "titre_item"    =>  "Get in the lab",
                "texte_item"    =>  "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icone_item"    =>  "flaticon-002-caliper",
                "created_at"    =>  now(),
            ],
            [
                "titre_item"    =>  "Projects online",
                "texte_item"    =>  "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icone_item"    =>  "flaticon-019-coffee-cup",
                "created_at"    =>  now(),
            ],
            [
                "titre_item"    =>  "SMART MARKETING",
                "texte_item"    =>  "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icone_item"    =>  "flaticon-020-creativity",
                "created_at"    =>  now(),
            ],
            [
                "titre_item"    =>  "Get in the lab",
                "texte_item"    =>  "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icone_item"    =>  "flaticon-037-idea",
                "created_at"    =>  now(),
            ],
            [
                "titre_item"    =>  "Projects online",
                "texte_item"    =>  "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icone_item"    =>  "flaticon-025-imagination",
                "created_at"    =>  now(),
            ],
            [
                "titre_item"    =>  "SMART MARKETING",
                "texte_item"    =>  "Lorem ipsum dolor sit amet, consectetur ad ipiscing elit. Curabitur leo est, feugiat nec",
                "icone_item"    =>  "flaticon-008-team",
                "created_at"    =>  now(),
            ],
        ]);
    }
}
