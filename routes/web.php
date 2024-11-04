<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookingController;


Route::get('/', function () {
    return view('app', ['title' => 'BRickStick | Premier Masonry and Construction Services']);
});

Route::get('/booking', [BookingController::class, 'showBookingForm']);

Route::post('/send-mail', [BookingController::class, 'sendMail']);
Route::post('/contact-mail', [ContactController::class, 'contactMail']);

Route::get('/contact', [ContactController::class, 'showContact']);

Route::get('/about', function () {
    return view('about', ['title' => 'About BRickStick | Our Mission and Values']);
});

Route::get('/gallery', function () {
    return view('gallery', ['title' => 'Gallery | BRickStick Project Showcase']);
});

Route::get('/service', function () {
    return view('services', ['title' => 'Our Services | BRickStick']);
});

// Service Pages
Route::get('services/chimney-repair', function () {
    return view('services/chimney-repair', ['title' => 'Chimney Repair Services | BRickStick']);
});
Route::get('services/fireplace', function () {
    return view('services/fireplace', ['title' => 'Fireplace Installation and Repair | BRickStick']);
});
Route::get('services/walkway', function () {
    return view('services/walkway', ['title' => 'Walkway Restoration Services | BRickStick']);
});
Route::get('services/stairs', function () {
    return view('services/stairs', ['title' => 'Front Stairs Installation | BRickStick']);
});
Route::get('services/stair-makeover', function () {
    return view('services/stair-makeover', ['title' => 'Stairs Makeovers | BRickStick']);
});
Route::get('services/masonry-repair', function () {
    return view('services/masonry-repair', ['title' => 'Expert Masonry Repair Services | BRickStick']);
});
Route::get('services/masonry-cleaning', function () {
    return view('services/masonry-cleaning', ['title' => 'Masonry Cleaning Solutions | BRickStick']);
});
Route::get('services/batt-insulation', function () {
    return view('services/batt-insulation', ['title' => 'Batt Insulation Services | BRickStick']);
});
Route::get('services/basement', function () {
    return view('services/basement', ['title' => 'Basement Renovation Services | BRickStick']);
});
Route::get('services/design-build', function () {
    return view('services/design-build', ['title' => 'Design Build Services | BRickStick']);
});
Route::get('services/stone-veneer', function () {
    return view('services/stone-veneer', ['title' => 'Professional Stone Veneer Installation Services | BRickStick']);
});
Route::get('services/const-fireplace', function () {
    return view('services/const-fireplace', ['title' => 'Fireplace Construction Services | BRickStick']);
});
Route::get('services/stone-wall', function () {
    return view('services/stone-wall', ['title' => 'Stone Wall Construction | BRickStick']);
});
Route::get('services/patio', function () {
    return view('services/patio', ['title' => 'Patio Repair and Restoration Services | BRickStick']);
});
Route::get('services/railing-repair', function () {
    return view('services/railing-repair', ['title' => 'Railing Repair and Restoration Services | BRickStick']);
});
Route::get('/christmas', function () {
    return view('/christmas', ['title' => 'Christmas toys | BRickStick']);
})->name("christmas");

