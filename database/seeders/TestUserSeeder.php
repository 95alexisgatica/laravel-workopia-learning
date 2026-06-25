<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Job;
use Carbon\Carbon;
use Illuminate\Support\Facades\Hash;

class TestUserSeeder extends Seeder
{
    public function run(): void
    {
        $user = User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@test.com',
            'email_verified_at' => Carbon::now(),
            'password' => Hash::make('password'), // password
        ]);

        $jobs = [
            [
                'title' => 'Senior Laravel Developer',
                'description' => 'We are looking for an experienced Laravel developer to join our team. You will be responsible for building and maintaining web applications, writing clean and efficient code, and collaborating with cross-functional teams to deliver high-quality software solutions.',
                'salary' => 120000,
                'tags' => 'laravel, php, mysql, vue, api',
                'job_type' => 'Full-Time',
                'remote' => true,
                'requirements' => '5+ years of PHP experience, 3+ years with Laravel, experience with RESTful APIs, MySQL, and frontend frameworks like Vue.js or React.',
                'benefits' => 'Health insurance, 401(k) matching, remote work flexibility, annual bonus, paid time off, professional development budget.',
                'address' => null,
                'city' => 'San Francisco',
                'state' => 'CA',
                'zipcode' => '94105',
                'contact_email' => 'hr@techcorp.com',
                'contact_phone' => '(555) 123-4567',
                'company_name' => 'TechCorp Solutions',
                'company_description' => 'TechCorp Solutions is a leading technology company specializing in enterprise software development and cloud solutions.',
                'company_logo' => null,
                'company_website' => 'https://techcorp.example.com',
            ],
            [
                'title' => 'Junior Frontend Developer',
                'description' => 'Join our growing team as a Junior Frontend Developer! You will work closely with senior developers to build responsive and user-friendly web interfaces. This is a great opportunity for someone looking to kickstart their career in web development.',
                'salary' => 65000,
                'tags' => 'javascript, html, css, react, tailwind',
                'job_type' => 'Full-Time',
                'remote' => false,
                'requirements' => '1+ year of experience with HTML, CSS, and JavaScript. Familiarity with React or Vue.js is a plus. Strong desire to learn and grow.',
                'benefits' => 'Health insurance, gym membership, flexible schedule, mentorship program, free lunches.',
                'address' => '123 Main Street',
                'city' => 'Austin',
                'state' => 'TX',
                'zipcode' => '73301',
                'contact_email' => 'careers@webstartup.io',
                'contact_phone' => '(555) 987-6543',
                'company_name' => 'WebStartup Inc.',
                'company_description' => 'WebStartup Inc. is a fast-growing startup building the next generation of web-based productivity tools.',
                'company_logo' => null,
                'company_website' => 'https://webstartup.example.com',
            ],
            [
                'title' => 'DevOps Engineer (Contract)',
                'description' => 'We need a skilled DevOps Engineer for a 6-month contract to help us migrate our infrastructure to AWS and implement CI/CD pipelines. Ideal for someone who enjoys working independently and solving complex infrastructure challenges.',
                'salary' => 90000,
                'tags' => 'aws, docker, kubernetes, ci-cd, terraform',
                'job_type' => 'Contract',
                'remote' => true,
                'requirements' => '3+ years of DevOps experience, strong knowledge of AWS services, hands-on experience with Docker and Kubernetes, proficiency in Terraform or similar IaC tools.',
                'benefits' => 'Flexible working hours, fully remote, equipment stipend.',
                'address' => null,
                'city' => 'New York',
                'state' => 'NY',
                'zipcode' => '10001',
                'contact_email' => 'contracts@cloudinfra.com',
                'contact_phone' => '(555) 456-7890',
                'company_name' => 'CloudInfra Services',
                'company_description' => 'CloudInfra Services provides cloud infrastructure consulting and managed services to businesses of all sizes.',
                'company_logo' => null,
                'company_website' => 'https://cloudinfra.example.com',
            ],
        ];

        foreach ($jobs as $jobData) {
            $jobData['user_id'] = $user->id;
            $jobData['created_at'] = now();
            $jobData['updated_at'] = now();
            Job::create($jobData);
        }

        echo "Created test user with ID {$user->id} and 3 job listings.\n";
    }
}
