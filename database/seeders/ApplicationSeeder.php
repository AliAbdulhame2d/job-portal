<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\JobListing;
use App\Models\Application;

class ApplicationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jobs = JobListing::all();
        $applicants = User::where('role', 'applicant')->get();

        foreach ($applicants as $applicant) {
            Application::factory()->create([
                'user_id' => $applicant->id,
                'job_id' => $jobs->random()->id,
            ]);
        }
    }
}
