<?php

namespace App\Http\Controllers;

use App\Models\IG;
use Illuminate\Http\Request;

class IG_Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ig_projects = IG::latest()->paginate(5);

        return view('ig_projects.index',compact('ig_projects'))
            ->with('i',(request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show image link in the projects list.
     * @param  \App\Models\IG  $ig_project
     * @return \Illuminate\Http\Response
     */
    public function show(IG $ig_project)
    {
        return view('ig_projects.show',compact('ig_project'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ig_projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'link' => 'required',
        ]);

        IG::create($request->all());

        return redirect()->route('ig_projects.index')
            ->with('success','Project created successfully.');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\IG  $ig_project
     * @return \Illuminate\Http\Response
     */
    public function edit(IG $ig_project)
    {
        return view('ig_projects.edit',compact('ig_project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\IG  $ig_project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, IG $ig_project)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'start' => 'required',
            'end' => 'required',
            'link' => 'required',
        ]);

        $ig_project->update($request->all());

        return redirect()->route('ig_projects.index')
            ->with('success','Project updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\IG  $ig_project
     * @return \Illuminate\Http\Response
     */
    public function destroy(IG $ig_project)
    {
        $ig_project->delete();

        return redirect()->route('ig_projects.index')
            ->with('success','Project deleted successfully.');
    }
}
