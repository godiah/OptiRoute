<?php

use App\Http\Controllers\DemoRequestController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    // Set timestamp when form page is viewed (for bot check: humans need a few seconds to fill the form)
    session(['demo_form_loaded_at' => time()]);
    return view('home');
});

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::post('/demo-request', [DemoRequestController::class, 'store'])
    ->middleware('throttle:3,1') // 3 submissions per minute per IP
    ->name('demo.store');
