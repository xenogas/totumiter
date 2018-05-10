<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ExpertiseCategory;
use App\ExpertiseSkill;
use App\ExperienceHistory;

class AboutController extends Controller
{
    function index() {
        $expertise = ExpertiseCategory::get();
        $experience = ExperienceHistory::get();
        return view('about', compact('expertise', 'experience'));
    }
}
