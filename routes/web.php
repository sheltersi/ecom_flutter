<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');

Route::get('img/{filename}', function (string $filename) {
    $path = public_path("product-images/{$filename}");

    if (! file_exists($path)) {
        abort(404);
    }

    return response()->file($path, [
        'Content-Type' => mime_content_type($path),
        'Cache-Control' => 'public, max-age=86400',
    ]);
})->where('filename', '.*');
