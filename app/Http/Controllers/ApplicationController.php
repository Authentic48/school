<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $applications = Application::latest()->get();
        return view('admin.pages.applications.index', compact('applications'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.application');
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
            'email' => ['required'],
            'phone' => ['required'],
        ],$messages);

        $application = new Application();
        $application->name = $request->name;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->status = 'новый заявитель';
        
        $application->save();
        return redirect()->back()->with(['status' => 'заявка отправлена успешно, мы перезвоним Вам в ближайшее время.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function show(Application $application)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $application = Application::findOrFail($id);
        return view('admin.pages.applications.edit', compact('application'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Application  $application
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
            'email' => ['required'],
            'phone' => ['required'],
            'status' => ['required'],
        ],$messages);

        $application = Application::findOrFail($id);
        $application->name = $request->name;
        $application->email = $request->email;
        $application->phone = $request->phone;
        $application->status = $request->status;
        
        $application->save();
        return redirect()->route('manager.applications')->with(['status' => 'приложение успешно обновлено.']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Application  $application
     * @return \Illuminate\Http\Response
     */
    public function destroy(Application $application)
    {
        //
    }
}
