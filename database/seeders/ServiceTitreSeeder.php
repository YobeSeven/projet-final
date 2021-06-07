<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceTitreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_titres')->insert([
            [
                "feature"       =>  "Get in the Lab and see the services",
                "section"       =>  "Get in the Lab and discover the world",
                "created_at"    =>  now(),
            ],
        ]);
    }
}
