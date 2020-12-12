<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Review;
use App\Models\Pricing;
use App\Models\Branch;

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

    public function pricing()
    {
        $pricing = Pricing::findOrFail(1);
        return view('pages.pricings',compact('pricing'));
    }

    public function pricingEdit()
    {
        $pricing = Pricing::findOrFail(1);
        return view('admin.pages.pricing', compact('pricing'));
    }

    public function pricingUpdate(Request $request)
    {
        $messages = 
        [
          'required' => 'Это поле обязательно к заполнению.',
        ];
        $request->validate([
            'description' => ['required'],
        ],$messages);

        $course = Pricing::findOrFail(1);
        $course->description = $request->description;
        $course->save();
        return redirect()->route('pricings')->with(['status' => 'курс успешно создан']);
    }
}
