<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'skills' => [
            [
                'id' => 1,
                'name' => 'Технический писатель',
                'experience' => '> 7 лет',
            ],
            [
                'id' => 2,
                'name' => 'Переговоры',
                'experience' => '> 10 лет',
            ],
            [
                'id' => 3,
                'name' => 'Разработка',
                'experience' => '1,5 года',
            ],
            [
                'id' => 4,
                'name' => 'UI/UX',
                'experience' => '0,5 года',
            ]
        ]
    ]);
});

Route::get('/{id}', function ($id) {
    $skills = [
        [
            'id' => 1,
            'name' => 'Технический писатель',
            'experience' => '> 7 лет',
        ],
        [
            'id' => 2,
            'name' => 'Переговоры',
            'experience' => '> 10 лет',
        ],
        [
            'id' => 3,
            'name' => 'Разработка',
            'experience' => '1,5 года',
        ],
        [
            'id' => 4,
            'name' => 'UI/UX',
            'experience' => '0,5 года',
        ]
    ];

    // \Illuminate\Support\Arr::first($skills, function ($skill) use ($id) {
    //     return $skill['id'] == $id;
    // });
    $skill = \Illuminate\Support\Arr::first($skills, fn($skill) => $skill['id'] == $id);

    // dd($skill);

    return view('skill', ['skill' => $skill]);
    
});

Route::get('/skills', function () {
    return view('skills');
});

Route::get('/contact', function () {
    return view('contact');
});
