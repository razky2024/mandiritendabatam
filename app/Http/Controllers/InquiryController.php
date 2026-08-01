<?php

namespace App\Http\Controllers;

use App\Models\InquiryLog;
use Illuminate\Http\Request;

class InquiryController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'product_id' => 'nullable|exists:products,id',
            'client_name' => 'nullable|string|max:255',
            'event_date' => 'nullable|date',
            'location' => 'nullable|string|max:255',
            'inquiry_type' => 'required|in:whatsapp_direct,calculator_quote',
            'raw_payload' => 'nullable|array',
        ]);

        $log = InquiryLog::create([
            'product_id' => $validated['product_id'] ?? null,
            'client_name' => $validated['client_name'] ?? null,
            'event_date' => $validated['event_date'] ?? null,
            'location' => $validated['location'] ?? null,
            'inquiry_type' => $validated['inquiry_type'],
            'raw_payload' => $validated['raw_payload'] ?? null,
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Inquiry logged successfully',
            'log_id' => $log->id,
        ]);
    }
}
