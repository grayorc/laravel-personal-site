<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\portfolio;
use App\Http\Controllers\StorageController;
use App\Models\BlogPost;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Route;
use League\CommonMark\Extension\CommonMark\Node\Inline\Image;

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::get('/resume', \App\Http\Controllers\ResumeController::class)->name('resume.index');

Route::get('/portfolio', [Portfolio::class, 'index'])->name('portfolio.index');

Route::get('/contact', \App\Http\Controllers\FeedbackController::class)->name('contact.index');

Route::post('/contact', [\App\Http\Controllers\FeedbackController::class, 'create'])->name('contact.create');

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{post}', [BlogController::class, 'single'])->name('blog.single');

Route::get('/thumbnails/{filename}', [StorageController::class , 'thumbnails']);
