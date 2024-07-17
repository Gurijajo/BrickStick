<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('app', ['title' => 'BRickStick']);
});
Route::get('/booking', [BookingController::class, 'showBookingForm']);
Route::post('/send-mail', [BookingController::class, 'sendMail']);
Route::post('/contact-mail', [ContactController::class, 'contactMail']);
Route::get('/contact', [ContactController::class, 'showContact']);

Route::get('/about', function () {
    return view('about', ['title' => 'About Us']);
});

Route::get('/gallery', function () {
    return view('gallery', ['title' => 'Gallery']);
});

Route::get('/service', function () {
    return view('services', ['title' => 'Services']);
});

Route::get('services/chimney-repair', function () {
    return view('services/chimney-repair', ['title' => 'Chimnay Repair']);
});
Route::get('services/fireplace', function () {
    return view('services/fireplace', ['title' => 'Fireplace']);
});
Route::get('services/walkway', function () {
    return view('services/walkway', ['title' => 'Walkway Restoration']);
});
Route::get('services/stairs', function () {
    return view('services/stairs', ['title' => 'Front Stairs']);
});
Route::get('services/stair-makeover', function () {
    return view('services/stair-makeover', ['title' => 'Stairs Makeovers']);
});
Route::get('services/masonry-repair', function () {
    return view('services/masonry-repair', ['title' => 'Masonry Repair']);
});
Route::get('services/masonry-cleaning', function () {
    return view('services/masonry-cleaning', ['title' => 'Masonry Cleaning']);
});
Route::get('services/batt-insulation', function () {
    return view('services/batt-insulation', ['title' => 'Batt Insulation']);
});
Route::get('services/basement', function () {
    return view('services/basement', ['title' => 'Basement']);
});
Route::get('services/design-build', function () {
    return view('services/design-build', ['title' => 'Design Build']);
});
Route::get('services/stone-veneer', function () {
    return view('services/stone-veneer', ['title' => 'Stone Veneer']);
});
Route::get('services/const-fireplace', function () {
    return view('services/const-fireplace', ['title' => 'Fireplace Construction']);
});
Route::get('services/stone-wall', function () {
    return view('services/stone-wall', ['title' => 'Stone Wall']);
});