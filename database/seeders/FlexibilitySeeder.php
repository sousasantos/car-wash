<?php

namespace Database\Seeders;

use App\Models\Flexibility;
use Illuminate\Database\Seeder;

class FlexibilitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Flexibility::factory()->createMany([
            ['description' => '1 day'],
            ['description' => '2 days'],
            ['description' => '3 days']
        ]);
    }
}
