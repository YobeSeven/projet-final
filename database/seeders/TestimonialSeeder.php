<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('testimonials')->insert([
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "01.jpg",
                "nom_client"    =>  "Michael Smith",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "AYOUB SMITH",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "01.jpg",
                "nom_client"    =>  "ZAKARIA SMITH",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "ABDELLAH SMITH",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "SEBASTIEN SMITH",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],
            [
                "texte_client"  =>  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur leo est, feugiat nec elementum id, suscipit id nulla. Nulla sit amet luctus dolor. Etiam finibus consequa.",
                "image_client"  =>  "02.jpg",
                "nom_client"    =>  "DAWIT SMITH",
                "job_client"    =>  "CEO Company",
                "created_at"    =>  now(),
            ],

        ]);
    }
}
