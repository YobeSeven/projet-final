<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call([
            RoleSeeder::class,
            PosteSeeder::class,
            CarouselIntroSeeder::class,
            IntroSeeder::class,
            CardAboutSectionSeeder::class,
            AboutSectionSeeder::class,
            TestimonialSeeder::class,
            ServiceSeeder::class,
            TeamSeeder::class,
            PromotionSeeder::class,
            ContactSectionSeeder::class,
            HomeTitreSeeder::class,
            UserSeeder::class,
        ]);
    }
    
}
