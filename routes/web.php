<?php

use App\Http\Controllers\Admin\BookingController as AdminBookingController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
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

Route::get('login', function() {
    return view('auth.login');
})->name('login')->middleware('guest');

Route::post('login', [LoginController::class, 'authenticate'])->middleware('guest');

Route::middleware('auth')->group(function() {
    Route::post('logout', [LoginController::class, 'logout'])->name('logout')->middleware('auth');

    Route::prefix('admin/bookings')->name('admin.bookings.')->group(function() {
        Route::get('/', [AdminBookingController::class, 'index'])->name('index');
        Route::get('create', [AdminBookingController::class, 'create'])->name('create');
        Route::post('store', [AdminBookingController::class, 'store'])->name('store');
        Route::get('{booking}/edit', [AdminBookingController::class, 'edit'])->name('edit');
        Route::put('{booking}/update', [AdminBookingController::class, 'update'])->name('update');
        Route::delete('{booking}/update', [AdminBookingController::class, 'destroy'])->name('destroy');
        Route::patch('{booking}/approve', [AdminBookingController::class, 'approve'])->name('approve');
    });
});