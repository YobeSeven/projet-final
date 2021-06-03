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
                "img_carousel"  =>  "img/01.jpg",
                "created_at"    =>  now(),
            ],
            [
                "img_carousel"  =>  "img/02.jpg",
                "created_at"    =>  now(),
            ],
        ]);
    }
}
