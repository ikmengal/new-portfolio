<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\{
    Mail, Log, DB
};
use Illuminate\Http\Request;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function store(Request $request){
         $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);

        $body = "$request->message.<br/><br/>";

        $mailData = [
            'title' => 'Contact Us',
            'name' => $request->name,
            'email' => $request->email,
            'body' => $body
        ];

        Mail::to('imranalibrohi148@gmail.com')->send(new ContactMail($mailData));
        Log::info("Mail Sent Successfully to: imranalibrohi148@gmail.com");

        return response()->json([
            'status' => 'success',
            'message' => 'Your message has been sent successfully!'
        ]);
    }
}
