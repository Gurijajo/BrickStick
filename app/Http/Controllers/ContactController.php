<?php

namespace App\Http\Controllers;
use App\Mail\contactmail;
use Mail;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function showContact(){
        return view('contact', ['title' => 'Contact Us']);
    }




    public function contactMail(Request $request) {
        $request->validate([
            'fullname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phoneNumber' => 'required|string|max:20',
            'message' => 'required|string'
        ]);
    
        $news = [
            'fullname' => $request->fullname,
            'email' => $request->email,
            'phoneNumber' => $request->phoneNumber,
            'message' => $request->message
        ];
    
        Mail::to('brickstickmasonry@gmail.com')->send(new contactmail($news));
    
        return redirect()->back()->with('success', 'Your mail was sent successfully, We will contact you within 24 hours. Have a nice day!');
    }
}
