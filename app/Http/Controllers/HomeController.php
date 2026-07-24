<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\Expertise;
use App\Models\Skill;
use App\Models\Experience;
use App\Models\Education;
use App\Models\SocialLink;

class HomeController extends Controller
{
    public function index()
    {
        $profile = Profile::first();

        $expertises = Expertise::orderBy('sort_order')->get();
        $skills = Skill::orderBy('sort_order')->get();
        $experiences = Experience::orderBy('sort_order')->get();
        $educations = Education::orderBy('sort_order')->get();
        $socialLinks = SocialLink::orderBy('sort_order')->get();

        return view('index', compact(
            'profile',
            'expertises',
            'skills',
            'experiences',
            'educations',
            'socialLinks'
        ));
    }
}
