<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;
use App\Models\Pricing;
use App\Models\Branch;
use App\Models\Team;

class PageController extends Controller
{
    public function welcome()
    {
        $courses = Course::take(3)->get();
        $reviews = Review::All();
        return view('pages.welcome', compact('courses','reviews'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function branch()
    {
        $branches = Branch::All();
        return view('pages.branche', compact('branches'));
    }

    public function team()
    {
        $teams = Team::All();
        return view('pages.team', compact('teams'));
    }

}
