<?php

namespace App\Http\Controllers;
use App\Models\User;
use Mail;
use App\Mail\BookigMail;
use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function showBookingForm()
    {
        return view('booking', ['title' => 'Reservation']);
    }


    public function sendMail(Request $request) {
        $request->validate([
            'firstname' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'date' => 'required|date',
            'categorySelect' => 'required|string',
            'message' => 'required|string',
            'otherCategory' => 'nullable|string|max:255'
        ]);
    

        $data = [
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'address' => $request->address,
            'date' => $request->date,
            'categorySelect' => $request->categorySelect,
            'message' => $request->message,
        ];
    
        if (!empty($request->otherCategory)) {
            $data['otherCategory'] = $request->otherCategory;
        }
    
        $booking = User::create($data);
    
        Mail::to('brickstickmasonry@gmail.com')->send(new BookigMail($booking->toArray()));
    
        return redirect()->back()->with('success', 'Your booking was sent successfully, We will contact you within 24 hours. Have a nice day!');
    }
    
}
