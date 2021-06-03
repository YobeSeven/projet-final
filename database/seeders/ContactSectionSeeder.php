<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactSectionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contact_sections')->insert([
            [
                "titre_contact"         =>  "Contact us",
                "texte_contact"         =>  "Cras ex mauris, ornare eget pretium sit amet, dignissim et turpis. Nunc nec maximus dui, vel suscipit dolor. Donec elementum velit a orci facilisis rutrum.",
                "info_contact"          =>  "Main Office",
                "adresse_contact"       =>  "C/ Libertad, 34",
                "commune_contact"       =>  "05200 Arévalo",
                "numero_contact"        =>  "0034 37483 2445 322",
                "email"                 =>  "hello@company.com",
                "created_at"            =>  now(),
            ],
        ]);
    }
}
