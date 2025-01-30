<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Tag;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(20)->create();

        foreach (Job::all() as $job) {
            $job->tags()->attach([
                rand(1, 5),
                rand(6, 10),
            ]);
        }
    }
}
