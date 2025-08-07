<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller

{
    public function index()
    {
        return view('contact_us.contact'); // adjust view name if needed
    }
   public function submit(Request $request)
{
    // Validate input (optional)
    $validated = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'nullable|string',
        'subject' => 'required|string',
        'message' => 'required|string',
    ]);

    // Do something with the data (e.g., save to DB or send email)
    // Contact::create($validated); // if you're using a model

    // Redirect or return response
    return redirect()->back()->with('success', 'Message sent successfully!');
}

}
