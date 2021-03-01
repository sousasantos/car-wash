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
        $bookings = Booking::orderBy('booking_date')->paginate(10);

        return view('admin.bookings.index', compact('bookings'));
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
