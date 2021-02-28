<?php

namespace App\Http\Controllers;

use App\Models\Flexibility;
use App\Models\VehicleSize;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $flexibilities = Flexibility::all();
        $vehicleSizes = VehicleSize::all();

        return view('homepage', compact('flexibilities', 'vehicleSizes'));
    }
}
