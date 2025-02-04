<?php

namespace Database\Seeders;

use App\Models\Tag;
use App\Models\Job;
use App\Models\Employer;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(EmployerSeeder::class);

        $this->call(UserSeeder::class);
        
        Tag::factory(10)->create();
                
        $this->call(JobSeeder::class);
    }
}
