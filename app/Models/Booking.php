<?php

namespace App\Models;

use App\Models\Traits\HasUuid;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory, HasUuid;

    protected $fillable = [
        'name',
        'booking_date',
        'contact_number',
        'email',
        'flexibility_id',
        'vehicle_size_id'
    ];

    public function flexibility()
    {
        return $this->hasOne(Flexibility::class);
    }

    public function vehicleSize()
    {
        return $this->hasOne(VehicleSize::class);
    }
}
