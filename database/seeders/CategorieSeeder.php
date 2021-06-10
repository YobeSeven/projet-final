<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            [
                "nom_categorie"     =>  "Developpement",
                "created_at"        =>  now(),
            ],
            [
                "nom_categorie"     =>  "design",
                "created_at"        =>  now(),
            ],
            [
                "nom_categorie"     =>  "ressource",
                "created_at"        =>  now(),
            ],
            [
                "nom_categorie"     =>  "Economie",
                "created_at"        =>  now(),
            ],
        ]);
    }
}
