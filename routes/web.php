<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::view('/','home');

Route::controller(JobController::class)->group(function () {
    Route::get('/jobs',  'index');
    Route::get('/jobs/create', 'create');
    Route::get('/jobs/{job}',  'show');
    Route::post('/jobs',  'store');
    Route::get('/jobs/{job}/edit', 'edit');
});

Route::view('/contact', 'contact');