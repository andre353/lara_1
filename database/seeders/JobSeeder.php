<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Job;
use App\Models\Tag;
use App\Models\Employer;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(10)->create();
        
        $jobs = Job::all();
        $employers = Employer::all();

        foreach ($jobs as $job) {
            $job->update([
                'employer_id' => $employers->random()->id,
            ]);
            $job->tags()->attach([rand(1, 10)]);        
        }
    }
}
