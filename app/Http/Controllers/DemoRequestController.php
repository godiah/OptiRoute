<?php

namespace App\Http\Controllers;

use App\Mail\NewDemoRequest;
use App\Models\DemoRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DemoRequestController extends Controller
{
    /**
     * Store a newly created demo request in storage.
     */
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'company' => 'required|string|max:255',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'comments' => 'nullable|string|max:1000',
        ]);

        // Create the demo request
        $demoRequest = DemoRequest::create($validated);

        // Send email to admin
        $adminEmail = env('ADMIN_EMAIL');
        Mail::to($adminEmail)->send(new NewDemoRequest($demoRequest));

        return back()->with('success', 'Thank you! Your demo request has been received. We will contact you shortly to schedule a convenient time.');
    }
}
