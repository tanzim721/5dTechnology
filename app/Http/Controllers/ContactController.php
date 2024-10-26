<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

class ContactController extends Controller
{
    public function showForm()
    {
        return "Hello World";
    }
    public function submitForm(Request $request)
    {
        $request->validate([
            'Name' => ['required', 'string', 'max:255'],
            'Email' => ['required', 'string', 'email', 'max:255'],
            'Subject' => ['required', 'string', 'max:255'],
            'Message' => ['required', 'string'],
        ]);
        Mail::to('tanzimulislam799@gmail.com')->send(new ContactMail($request->all()));
        return redirect()->back()->with('success', 'Message Sent Successfully');
    }
}
