<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employer;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $employers = Employer::all();

        User::factory(10)->create()->each(function ($user) use ($employers) {
            $user->employer_id = $employers->random()->id;
            $user->save();
        });
    }
}
