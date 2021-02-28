<?php

namespace Database\Seeders;

use App\Models\VehicleSize;
use Illuminate\Database\Seeder;

class VehicleSizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        VehicleSize::factory()->createMany([
            ['description' => 'small'],
            ['description' => 'medium'],
            ['description' => 'large'],
            ['description' => 'van']
        ]);
    }
}
