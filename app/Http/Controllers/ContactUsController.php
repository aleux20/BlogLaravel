<?php

namespace App\Http\Controllers;

use App\Mail\ContactUsMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactUsController extends Controller
{
    public function index()
    {
        return view('contact_us.index');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string|max:500',
        ]);

        Mail::to('hansalejandroca@gmail.com')->send(new ContactUsMailable($request->all()));

        return redirect()->route('contact_us.index')->with('info', 'Your message has been sent successfully.');
    }
}
