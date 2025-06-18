<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact; // Don't forget to import your Contact model!
use Illuminate\Support\Str; // Import Str for truncation in the view if needed

class ContactController extends Controller
{
    // Method to display the contact form and the list of messages
    public function showForm()
    {
        // Fetch all contact messages from the database
        $contacts = Contact::all();

        // Pass the fetched data to the 'contact' view
        return view('contact', compact('contacts'));
    }

    // Method to handle the form submission
    public function store(Request $request)
    {
        // 1. Validate the incoming request data
        $validatedData = $request->validate([
            'full_names' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        // 2. Create a new Contact record in the database using the validated data
        Contact::create($validatedData);

        // 3. Redirect the user back to the contact form with a success message
        return redirect()->route('contact.show')->with('success', 'Your message has been sent successfully!');
    }
}