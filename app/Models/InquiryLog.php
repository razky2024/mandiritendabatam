<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InquiryLog extends Model
{
    protected $fillable = [
        'product_id',
        'client_name',
        'event_date',
        'location',
        'inquiry_type',
        'raw_payload',
    ];

    protected $casts = [
        'event_date' => 'date',
        'raw_payload' => 'array',
    ];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
