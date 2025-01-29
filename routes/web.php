<?php

use Illuminate\Support\Facades\Route;
use App\Models\Job;


Route::get('/', function () {
    return view('home');
});

Route::get('/jobs/create', function () {       
    return view('jobs.create');    
});

Route::get('/jobs/{id}', function ($id) {    

    $job = Job::find($id);

    return view('jobs.show', ['job' => $job]);    
});

Route::get('/jobs', function () {
    return view('jobs.index', [
        'jobs' => Job::with('employer')->paginate(3),
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
