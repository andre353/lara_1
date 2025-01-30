<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

// Index
Route::get('/jobs', [JobController::class, 'index']);
// Create
Route::get('/jobs/create', [JobController::class, 'create']);
// Show 
Route::get('/jobs/{job}', [JobController::class, 'show']);
// Store
Route::post('/jobs', [JobController::class, 'store']);
// Edit 
Route::get('/jobs/{job}/edit', [JobController::class, 'edit']);

Route::get('/contact', function () {
    return view('contact');
});
