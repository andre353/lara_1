<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Skill {
    public static function all(): array 
    {
        return [
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
    }

    public static function find(int $id): array{
        $skill = Arr::first(static::all(), fn($skill) => $skill['id'] == $id);

        if (! $skill) {
            abort(404);
        }

        return $skill;
    }
}
