<?php

use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [
    HomeController::class, 'index'
])->name('homepage');

Route::post('booking', [
    BookingController::class, 'store'
])->name('booking.store');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::prefix('bookings')->name('bookings.')->group(function() {
        Route::get('/', [AdminBookingController::class, 'index'])->name('index');
        Route::get('create', [AdminBookingController::class, 'create'])->name('create');
        Route::post('store', [AdminBookingController::class, 'store'])->name('store');
        Route::get('{booking}/edit', [AdminBookingController::class, 'edit'])->name('edit');
        Route::put('{booking}/update', [AdminBookingController::class, 'update'])->name('update');
        Route::delete('{booking}/update', [AdminBookingController::class, 'destroy'])->name('destroy');
    });
});
