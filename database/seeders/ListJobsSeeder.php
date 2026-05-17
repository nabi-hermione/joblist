<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ListJobsSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('job_listing')->insert([
            [
                'title' => 'Software Developer',
                'job_description' => 'Designs, develops, tests, and maintains software applications. They write code, fix bugs, and update programs to meet user needs and improve performance.',
                'salary' => 49364.00,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Developer',
                'job_description' => 'Builds and maintains websites and web apps. They ensure websites load properly, work across devices, and provide a smooth user experience.',
                'salary' => 41760.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Front-End Developer',
                'job_description' => 'Focuses on the visual part of websites. They design layouts, buttons, and interactive features to make sites attractive and easy to use.',
                'salary' => 62215.16,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Back-End Developer',
                'job_description' => 'Works behind the scenes handling servers, databases, and application logic. They ensure data is processed correctly and systems run efficiently.',
                'salary' => 62464.83,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Full-Stack Developer',
                'job_description' => 'Handles both front-end and back-end development. They can build complete applications from user interface to server and database.',
                'salary' => 63771.75,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Data Analyst',
                'job_description' => 'Gathers and analyzes data to find patterns and trends. They create reports and visualizations to help businesses make informed decisions.',
                'salary' => 37837.42,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Database Administrator',
                'job_description' => 'Manages and maintains databases. They ensure data is secure, organized, backed up, and easily accessible when needed.',
                'salary' => 67147.09,
                'created_at' => now(),
                'updated_at' => now(),
            ],
               [
                'title' => 'Network Administrator',
                'job_description' => 'Installs and maintains computer networks. They monitor performance, fix connectivity issues, and ensure secure communication between devices.',
                'salary' => 41495.42,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cybersecurity Analyst',
                'job_description' => 'Protects systems and data from cyber threats. They monitor for attacks, investigate security breaches, and implement protective measures.',
                'salary' => 52191.6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mobile App Developer',
                'job_description' => 'Designs and builds applications for smartphones and tablets. They ensure apps run smoothly, are user-friendly, and meet platform requirements.',
                'salary' => 52723.3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
