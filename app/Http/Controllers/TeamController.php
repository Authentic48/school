<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::latest()->get();
        return view('admin.pages.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pages.team.create');
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
            'image' => ['required' ,' mimes:jpeg,bmp,png'],
        ],$messages);

        $team = New Team();
        $team->name = $request->name;
        $team->profession = $request->profession;
        
        if($request->has('image'))
        {
            $image = $request->file('image');
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = '/images'; 
            $filePath = Storage::disk('do_spaces')->putFileAs($folder, $image, $name, 'public');
            $team->image = $filePath;
        }
        $team->save();
        return redirect()->route('manager.teams')->with(['status' => 'успешно создан']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::findOrFail($id);
        return view('admin.pages.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
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
            'image' => [' mimes:jpeg,bmp,png'],
        ],$messages);

        $team = Team::findOrFail($id);
        $team->name = $request->name;
        $team->profession = $request->profession;
        
        if($request->has('image'))
        {
            $image = $request->file('image');
            $name = Str::slug($request->input('name')).'_'.time();
            $folder = '/images'; 
            $filePath = Storage::disk('do_spaces')->putFileAs($folder, $image, $name, 'public');
            $team->image = $filePath;
        }
        $team->save();
        return redirect()->route('manager.teams')->with(['status' => 'Успешно Обновлено']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $team = Team::findOrFail($id);
        $team->delete();

        return redirect()->route('manager.teams')->with(['status' => 'удалено успешно']);
    }
}
