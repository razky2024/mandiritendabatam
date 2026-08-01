<?php

namespace App\Services;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ImageOptimizerService
{
    public static function optimizeAndConvertToWebp(string $sourcePath, string $directory = 'products'): string
    {
        $fullPath = Storage::disk('public')->path($sourcePath);

        if (!file_exists($fullPath)) {
            return $sourcePath;
        }

        $imageInfo = @getimagesize($fullPath);
        if (!$imageInfo) {
            return $sourcePath;
        }

        $mime = $imageInfo['mime'];
        $width = $imageInfo[0];
        $height = $imageInfo[1];

        switch ($mime) {
            case 'image/jpeg':
                $srcImage = @imagecreatefromjpeg($fullPath);
                break;
            case 'image/png':
                $srcImage = @imagecreatefrompng($fullPath);
                break;
            case 'image/webp':
                $srcImage = @imagecreatefromwebp($fullPath);
                break;
            default:
                $srcImage = null;
                break;
        }

        if (!$srcImage) {
            return $sourcePath;
        }

        // Calculate 1200px max width/height preserving aspect ratio
        $maxDimension = 1200;
        if ($width > $maxDimension || $height > $maxDimension) {
            if ($width >= $height) {
                $newWidth = $maxDimension;
                $newHeight = (int) round(($height / $width) * $maxDimension);
            } else {
                $newHeight = $maxDimension;
                $newWidth = (int) round(($width / $height) * $maxDimension);
            }
        } else {
            $newWidth = $width;
            $newHeight = $height;
        }

        $dstImage = imagecreatetruecolor($newWidth, $newHeight);

        // Preserve transparency
        if ($mime === 'image/png' || $mime === 'image/webp') {
            imagealphablending($dstImage, false);
            imagesavealpha($dstImage, true);
        }

        imagecopyresampled($dstImage, $srcImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);

        // Save as WebP with 80% compression quality
        $filename = pathinfo($sourcePath, PATHINFO_FILENAME) . '_' . Str::random(5) . '.webp';
        $relativeWebpPath = $directory . '/' . $filename;
        $destinationPath = Storage::disk('public')->path($relativeWebpPath);

        Storage::disk('public')->makeDirectory($directory);

        imagewebp($dstImage, $destinationPath, 80);

        imagedestroy($srcImage);
        imagedestroy($dstImage);

        // Remove temp source file if different
        if ($fullPath !== $destinationPath && file_exists($fullPath)) {
            @unlink($fullPath);
        }

        return $relativeWebpPath;
    }
}
