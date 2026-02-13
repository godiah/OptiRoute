<?php

use App\Http\Controllers\DemoRequestController;
use App\Http\Controllers\SitemapController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/sitemap.xml', [SitemapController::class, 'index'])->name('sitemap');

Route::post('/demo-request', [DemoRequestController::class, 'store'])->name('demo.store');
