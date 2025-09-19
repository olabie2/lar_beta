<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyEvent;
use App\Models\EventRegisterApplication;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
class EventRegisterApplicationController extends Controller
{
    //


   public function store(Request $req, $eventId)
    {
        // ✅ Fetch event or fail
        $event = CompanyEvent::findOrFail($eventId);

        // ✅ Check spots first
        if (! $event->hasAvailableSpots()) {
            return redirect()
                ->back()
                ->withErrors(['event_full' => 'Sorry, this event is already full.']);
        }

        // ✅ Validation
        $validated = $req->validate([
            'name'  => 'required|string|max:255',
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('event_register_applications')
                    ->where(fn ($query) => $query->where('company_event_id', $event->id)),
            ],
            'phone_number' => 'nullable|string|max:20',
        ], [
            'email.unique' => 'This email is already registered for this event.',
            'name.required' => 'Please enter your full name.',
            'email.required' => 'We need your email address to confirm registration.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        // ✅ Save in transaction (safe increment)
        DB::transaction(function () use ($validated, $event) {
            EventRegisterApplication::create([
                'full_name'        => $validated['name'],
                'email'            => $validated['email'],
                'phone_number'     => $validated['phone_number'] ?? null,
                'company_event_id' => $event->id,
            ]);

            // Increase filled spots safely
        });

        return redirect()
            ->back()
            ->with('success', 'Your registration was submitted successfully!');
    }
}
