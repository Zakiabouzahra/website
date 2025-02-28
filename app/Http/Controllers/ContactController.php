<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function create()
    {
        return view('contact');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'services' => 'required|string|max:255',
            'phone' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Contact::create($validatedData);

        return redirect()->route('contact', ['locale' => app()->getLocale()])->with('success', 'Message sent successfully.');
    }
}
