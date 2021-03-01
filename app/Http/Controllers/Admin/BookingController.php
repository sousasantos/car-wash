<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Models\Booking;
use App\Models\Flexibility;
use App\Models\VehicleSize;

class BookingController extends Controller
{
    public function index()
    {
        return view('admin.bookings.index');
    }

    public function create()
    {
        $flexibilities = Flexibility::all();
        $vehicleSizes = VehicleSize::all();

        return view('admin.bookings.create', compact('flexibilities', 'vehicleSizes'));
    }

    public function store(BookingRequest $request)
    {
        Booking::create($request->validated());

        return redirect()->route('admin.bookings.index')->withSuccess('Booking created successfully!');
    }
}
