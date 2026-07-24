<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Expertise;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\SocialLink;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Profile
        Profile::create([
            'name' => 'Doğukan Muhtar',
            'title' => 'Computer Engineering Student',
            'intro' => 'Final-year Computer Engineering student passionate about Laravel and backend development.',
            'about' => 'Final-year Computer Engineering student focused on Laravel, PHP and MySQL. I enjoy building clean, scalable web applications and continuously improving my backend development skills.',
            'location' => 'Gaziantep, Türkiye',
            'phone' => '+90 506 424 72 41',
            'email' => 'dogukanmuhtar1@gmail.com',
            'website' => 'https://github.com/DogukanMuhtar',
            'profile_image' => 'profile.jpeg',
        ]);


        Expertise::create([
            'title' => 'Backend Development',
            'description' => 'Building scalable web applications using Laravel, PHP and MySQL.',
            'sort_order' => 1,
        ]);

        Expertise::create([
            'title' => 'Web Development',
            'description' => 'Developing responsive and modern web interfaces.',
            'sort_order' => 2,
        ]);

        Expertise::create([
            'title' => 'Problem Solving',
            'description' => 'Solving software problems with clean and efficient solutions.',
            'sort_order' => 3,
        ]);


        Skill::create([
            'name' => 'Laravel',
            'percentage' => 85,
            'sort_order' => 1,
        ]);

        Skill::create([
            'name' => 'PHP',
            'percentage' => 80,
            'sort_order' => 2,
        ]);

        Skill::create([
            'name' => 'MySQL',
            'percentage' => 80,
            'sort_order' => 3,
        ]);

        Skill::create([
            'name' => 'HTML',
            'percentage' => 90,
            'sort_order' => 4,
        ]);

        Skill::create([
            'name' => 'CSS',
            'percentage' => 85,
            'sort_order' => 5,
        ]);

        Skill::create([
            'name' => 'Bootstrap',
            'percentage' => 85,
            'sort_order' => 6,
        ]);

        Skill::create([
            'name' => 'Git',
            'percentage' => 80,
            'sort_order' => 7,
        ]);

        Skill::create([
            'name' => 'JavaScript',
            'percentage' => 70,
            'sort_order' => 8,
        ]);


        Experience::create([
            'company' => 'GBB Bilişim',
            'position' => 'Backend Developer Intern',
            'location' => 'Gaziantep',
            'start_date' => '2026-06-01',
            'end_date' => null,
            'description' => 'Developing Laravel-based web applications and improving backend features.',
            'sort_order' => 1,
        ]);


        Education::create([
            'school' => 'Near East University',
            'degree' => 'Computer Engineering Student',
            'location' => 'Nicosia, TRNC',
            'start_date' => '2022-09-01',
            'end_date' => null,
            'description' => 'Final-year Computer Engineering student.',
            'sort_order' => 1,
        ]);


        SocialLink::create([
            'platform' => 'GitHub',
            'url' => 'https://github.com/DogukanMuhtar',
            'icon' => 'bi-github',
            'sort_order' => 1,
        ]);

        SocialLink::create([
            'platform' => 'LinkedIn',
            'url' => 'https://cy.linkedin.com/in/do%C4%9Fukan-muhtar-475104246',
            'icon' => 'bi-linkedin',
            'sort_order' => 2,
        ]);

        SocialLink::create([
            'platform' => 'Email',
            'url' => 'mailto:dogukanmuhtar1@gmail.com',
            'icon' => 'bi-envelope-fill',
            'sort_order' => 3,
        ]);
    }
}
