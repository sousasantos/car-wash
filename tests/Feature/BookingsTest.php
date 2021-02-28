<?php

namespace Tests\Feature;

use App\Models\Booking;
use App\Models\Flexibility;
use App\Models\VehicleSize;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class BookingsTest extends TestCase
{
    use WithFaker, RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_store_booking()
    {
        $this->seed();

        $data = [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'contact_number' => $this->faker->randomNumber(9),
            'booking_date' => $this->faker->dateTimeBetween(now(), now()->addYear())->format('Y-m-d'),
            'flexibility_id' => Flexibility::inRandomOrder()->first()->id,
            'vehicle_size_id' => VehicleSize::inRandomOrder()->first()->id
        ];

        $this->post(route('booking.store'), $data);

        $this->assertDatabaseCount((new Booking)->getTable(), 1);
    }
}
