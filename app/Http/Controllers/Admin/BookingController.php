<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BookingRequest;
use App\Mail\BookingApproved;
use App\Models\Booking;
use App\Models\Flexibility;
use App\Models\VehicleSize;
use Illuminate\Support\Facades\Mail;

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

        return redirect()->route('admin.bookings.index')->withInfo('Booking created successfully!');
    }

    public function edit(Booking $booking)
    {
        $flexibilities = Flexibility::all();
        $vehicleSizes = VehicleSize::all();

        return view('admin.bookings.edit', compact('booking','flexibilities', 'vehicleSizes'));
    }

    public function update(BookingRequest $request, Booking $booking)
    {
        $booking->update($request->validated());
        
        return redirect()->route('admin.bookings.index')->withInfo('Booking updated successfully!');
    }


    public function destroy(Booking $booking)
    {
        $booking->delete();
        
        return redirect()->route('admin.bookings.index')->withInfo('Booking deleted successfully!');
    }

    public function approve(Booking $booking)
    {
        $booking->approved = true;
        $booking->save();

        Mail::to($booking->email)->send(new BookingApproved($booking));

        return redirect()->route('admin.bookings.index')->withInfo('Booking approved successfully!');
    }
}
