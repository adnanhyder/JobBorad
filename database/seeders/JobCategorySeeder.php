<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\JobCategory;


class JobCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $jobCategory = JobCategory::create([
            'job_category_name' => 'Web Developer',
            'description' =>  'fhdfj',
            'status' =>  1
          ]);
    }
}
