<?php

namespace App\Http\Controllers;

use App\Mail\DemoRequestAcknowledgment;
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
        // Honeypot: reject if hidden field was filled (bots often fill every field)
        if ($request->filled('website')) {
            return $this->fakeSuccess();
        }

        // Time check: form must be open at least 4 seconds (humans need time to fill; bots submit instantly)
        $loadedAt = session('demo_form_loaded_at');
        if (! $loadedAt || (time() - (int) $loadedAt) < 4) {
            return $this->fakeSuccess();
        }

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

        // Send acknowledgment email to the user
        Mail::to($demoRequest->email)->send(new DemoRequestAcknowledgment($demoRequest));

        // Send notification email to admin
        $adminEmail = env('ADMIN_EMAIL');
        Mail::to($adminEmail)->send(new NewDemoRequest($demoRequest));

        return back()->with('success', 'Thank you! Your demo request has been received. We will contact you shortly to schedule a convenient time.');
    }

    /**
     * Return same success response as real submission so bots don't know they were rejected.
     */
    private function fakeSuccess(): \Illuminate\Http\RedirectResponse
    {
        return back()->with('success', 'Thank you! Your demo request has been received. We will contact you shortly to schedule a convenient time.');
    }
}
