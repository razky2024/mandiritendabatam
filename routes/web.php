<?php

use App\Http\Controllers\InquiryController;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    $categories = Category::where('is_active', true)
        ->orderBy('sort_order', 'asc')
        ->get();

    $products = Product::with(['category', 'images', 'primaryImage'])
        ->where('is_active', true)
        ->orderBy('is_featured', 'desc')
        ->orderBy('created_at', 'desc')
        ->get();

    return view('welcome', compact('categories', 'products'));
});

Route::post('/api/inquiry', [InquiryController::class, 'store'])
    ->middleware('throttle:6,1');
