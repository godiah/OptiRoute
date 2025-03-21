<?php

use App\Http\Controllers\DemoRequestController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::post('/demo-request', [DemoRequestController::class, 'store'])->name('demo.store');
