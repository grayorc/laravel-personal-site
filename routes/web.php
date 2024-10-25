<?php

use App\Http\Controllers\BlogController;
use App\Models\BlogPost;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::get('/resume', \App\Http\Controllers\ResumeController::class)->name('resume.index');

Route::get('/portfolio', function () {
    // TODO Complete it
    return view('pages.coming-soon');
})->name('portfolio.index');

Route::get('/contact', function () {
    // TODO Complete it
    return view('pages.coming-soon');
})->name('contact.index');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'single'])->name('blog.single');

Route::get('/thumbnails/{filename}', function ($filename) {
    $path = storage_path('app/public/thumbnails/' . $filename);
    if (!File::exists($path)) {
        abort(404);
    }

    $file = File::get($path);
    $type = File::mimeType($path);

    $response = Response::make($file, 200);
    $response->header("Content-Type", $type);
    return $response;
});
