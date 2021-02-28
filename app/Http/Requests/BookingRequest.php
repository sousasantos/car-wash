<?php

namespace App\Http\Requests;

use App\Models\Flexibility;
use App\Models\VehicleSize;
use Database\Seeders\FlexibilitySeeder;
use Illuminate\Foundation\Http\FormRequest;

class BookingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|string|min:3|max:255',
            'booking_date' => 'required|date|after:today',
            'flexibility_id' => 'required|exists:' . (new Flexibility)->getTable() . ',id',
            'vehicle_size_id' => 'required|exists:' . (new VehicleSize())->getTable() . ',id',
            'contact_number' => 'required|integer|digits_between:8,16',
            'email' => 'required|email|min:4|max:255'
        ];
    }
}
