<?php

namespace App\Services;

use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageOptimizerService
{
    public static function optimizeAndConvertToWebp(string $sourcePath, string $directory = 'products'): string
    {
        $manager = new ImageManager(new Driver());

        $fullPath = Storage::disk('public')->path($sourcePath);

        if (!file_exists($fullPath)) {
            return $sourcePath;
        }

        $image = $manager->read($fullPath);

        // Resize maximum dimension to 1200px maintaining aspect ratio
        if ($image->width() > 1200 || $image->height() > 1200) {
            $image->scale(width: 1200);
        }

        // Encode to WebP with 80% quality
        $encoded = $image->toWebp(80);

        // Generate webp filename
        $filename = pathinfo($sourcePath, PATHINFO_FILENAME) . '_' . Str::random(5) . '.webp';
        $relativeWebpPath = $directory . '/' . $filename;
        $destinationPath = Storage::disk('public')->path($relativeWebpPath);

        // Ensure storage directory exists
        Storage::disk('public')->makeDirectory($directory);

        // Save optimized webp image
        $encoded->save($destinationPath);

        // Remove original file if different
        if ($fullPath !== $destinationPath && file_exists($fullPath)) {
            @unlink($fullPath);
        }

        return $relativeWebpPath;
    }
}
