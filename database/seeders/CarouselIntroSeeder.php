<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarouselIntroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('carousel_intros')->insert([
            [
                "image_carousel"    =>  "img/01.jpg",
                // "texte_carousel"    =>  "texte pour 1",
                "created_at"        =>  now(),
            ],
            [
                "image_carousel"    =>  "img/02.jpg",
                // "texte_carousel"    =>  "texte pour 2",
                "created_at"        =>  now(),
            ],
        ]);
    }
}
