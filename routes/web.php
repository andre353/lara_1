<?php

use Illuminate\Support\Facades\Route;
use App\Models\Skill;


Route::get('/', function () {
    return view('home');
});

Route::get('/skills/{id}', function ($id) {    

    $skill = Skill::find($id);

    return view('skill', ['skill' => $skill]);    
});

Route::get('/skills', function () {
    return view('skills', [
        'skills' => Skill::all()
    ]);
});

Route::get('/contact', function () {
    return view('contact');
});
