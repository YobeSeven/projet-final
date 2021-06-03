<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DeviceServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('device_services')->insert([
            [
                "image_device"  =>  "device.png",
                "created_at"    =>  now(),
            ],
        ]);
    }
}
