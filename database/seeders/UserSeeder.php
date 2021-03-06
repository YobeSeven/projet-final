<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                "name"          =>  "admin",
                "poste_id"      =>  1,
                "role_id"       =>  1,
                "image"         =>  "2.jpg",
                "validate"      =>  1,
                "email"         =>  "admin@email.com",
                "password"      =>  Hash::make('adminpassword'),
                "created_at"    =>  now(),
            ],
            [
                "name"          =>  "webmaster",
                "poste_id"      =>  2,
                "role_id"       =>  2,
                "image"         =>  "1.jpg",
                "validate"      =>  1,
                "email"         =>  "webmaster@email.com",
                "password"      =>  Hash::make('webmasterpassword'),
                "created_at"    =>  now(),
            ],
            [
                "name"          =>  "redacteur",
                "poste_id"      =>  3,
                "role_id"       =>  3,
                "image"         =>  "3.jpg",
                "validate"      =>  1,
                "email"         =>  "redacteur@email.com",
                "password"      =>  Hash::make('redacteurpassword'),
                "created_at"    =>  now(),
            ],
        ]);
    }
}
