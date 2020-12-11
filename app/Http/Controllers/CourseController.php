<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Course::All();
        return view('pages.courses.index', compact('courses'));
    }

      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin()
    {
        $courses = Course::All();
        return view('admin.pages.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $messages = 
        [
          'required' => 'Это поле обязательно к заполнению.',
        ];
        $request->validate([
            'title' => ['required'],
            'level' => ['required'],
            'duration' => ['required'],
            'description' => ['required'],
            'image' => ['required'],
            'book' => ['required'],
        ],$messages);

        $course = New Course();
        $course->title = $request->title;
        $course->level = $request->level;
        $course->duration = $request->duration;
        $course->book = $request->book;
        $course->description = $request->description;
        $course->slug = substr(number_format(time() * rand(),0,'',''),0,10);
        if($request->has('image'))
        {
            $image = $request->file('image');
            $name = Str::slug($request->input('title')).'_'.time();
            $folder = '/images'; 
            $filePath = Storage::disk('do_spaces')->putFileAs($folder, $image, $name, 'public');
            $course->image = $filePath;
        }
        $course->save();
        return redirect()->route('manager.courses')->with(['status' => 'курс успешно создан']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('pages.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($slug)
    {
        $course = Course::where('slug', $slug)->first();
        return view('admin.pages.courses.edit', compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $slug)
    {
        $messages = 
        [
          'required' => 'Это поле обязательно к заполнению.',
        ];
        $request->validate([
            'title' => ['required'],
            'level' => ['required'],
            'duration' => ['required'],
            'description' => ['required'],
            'book' => ['required'],
        ],$messages);

        $course = Course::where('slug', $slug)->first();
        $course->title = $request->title;
        $course->level = $request->level;
        $course->duration = $request->duration;
        $course->book = $request->book;
        $course->description = $request->description;
        if($request->has('image'))
        {
            $image = $request->file('image');
            $name = Str::slug($request->input('title')).'_'.time();
            $folder = '/images'; 
            $filePath = Storage::disk('do_spaces')->putFileAs($folder, $image, $name, 'public');
            $course->image = $filePath;
        }
        $course->save();
        return redirect()->route('manager.courses')->with(['status' => 'курс успешно обновлен']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($slug)
    {
        $course = Course::where('slug', $slug)->first();
        $course->delete();

        return redirect()->route('manager.courses')->with(['status' => 'курс успешно удален']);
    }
}
