<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PosteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('postes')->insert([
            [
                "poste_name"    => "Directeur",
                "created_at"    =>  now(),
            ],
            [
                "poste_name"    => "C.E.O",
                "created_at"    =>  now(),
            ],
            [
                "poste_name"    => "Entrepreneur",
                "created_at"    =>  now(),
            ],
            [
                "poste_name"    => "Web Developpeur",
                "created_at"    =>  now(),
            ],
        ]);
    }
}
