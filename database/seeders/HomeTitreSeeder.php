<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HomeTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('home_titres')->insert([
            [
                "titre_service"     =>  "Get in the Lab and see the services",
                "titre_team"        =>  "Get in the Lab and meet the team",
                "titre_testimonial" =>  "What our clients say",
                "created_at"        =>  now(),
            ],
        ]);
    }
}
