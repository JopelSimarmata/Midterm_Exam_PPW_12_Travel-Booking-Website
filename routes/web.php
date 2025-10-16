<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\DestinasiController;


Route::get('/', function () {
    return redirect('/destinasi');
});

// Route Destinasi
Route::get('/destinasi', [DestinasiController::class, 'index']);
Route::get('/destinasi/{id}', [DestinasiController::class, 'show']);
Route::post('/booking-destinasi', [BookingController::class, 'storeDestinasi']);

// Route Booking Manual
Route::get('/booking', [BookingController::class, 'index']);
Route::post('/booking', [BookingController::class, 'store']);
Route::get('/bookings', [BookingController::class, 'listBookings']);
