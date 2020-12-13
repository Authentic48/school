<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reviews = Review::All();
        return view('admin.pages.reviews.index', compact('reviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.reviews.create');
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
            'name' => ['required'],
            'profession' => ['required'],
            'description' => ['required'],
            'image' => ['required|mimes:jpeg,bmp,png'],
        ],$messages);

        $review = New Review();
        $review->name = $request->name;
        $review->description = $request->description;
        $review->profession = $request->profession;
        
        if($request->has('image'))
        {
            $image = $request->file('image');
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = '/images'; 
            $filePath = Storage::disk('do_spaces')->putFileAs($folder, $image, $name, 'public');
            $review->image = $filePath;
        }
        $review->save();
        return redirect()->route('manager.reviews')->with(['status' => 'отзывы успешно создан']);

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function show(Review $review)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        return view('admin.pages.reviews.edit', compact('review'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $messages = 
        [
          'required' => 'Это поле обязательно к заполнению.',
        ];
        $request->validate([
            'name' => ['required'],
            'profession' => ['required'],
            'description' => ['required'],
        ],$messages);

        $review = Review::findOrFail($id);
        $review->name = $request->name;
        $review->description = $request->description;
        $review->profession = $request->profession;
        
        if($request->has('image'))
        {
            $image = $request->file('image');
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = '/images'; 
            $filePath = Storage::disk('do_spaces')->putFileAs($folder, $image, $name, 'public');
            $review->image = $filePath;
        }
        $review->save();
        return redirect()->route('manager.reviews')->with(['status' => 'отзывы успешно обновлено']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Review  $review
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::findOrFail($id);
        $review->delete();

        return redirect()->route('manager.reviews')->with(['status' => 'отзывы успешно удалено']);

    }
}
