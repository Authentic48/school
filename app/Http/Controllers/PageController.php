<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;

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
}
