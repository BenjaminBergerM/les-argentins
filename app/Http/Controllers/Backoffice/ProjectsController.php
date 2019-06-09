<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Project;
use Storage;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return view('backoffice.projects.index')->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'home_text' => 'required',
            'home_background' => 'required',
            'sidenav_detaill' => 'required',
            'sidenav_img' => 'required',
            'project_img' => 'required',
        ]);

        $porject = new Project();
        $project->title = $request->input('title');
        $project->home_text = $request->input('home_text');
        $project->sidenav_detaill = $request->input('sidenav_detaill');
        
        $home_background = $request->file('home_background');
        $path = $home_background->storeAs('public/projects', uniqid() . '_home_background.'.$home_background->getClientOriginalExtension());

        $sidenav_img = $request->file('sidenav_img');
        $path = $sidenav_img->storeAs('public/projects', uniqid() . '_sidenav_img.'.$sidenav_img->getClientOriginalExtension());

        $project_img = $request->file('project_img');
        $path = $project_img->storeAs('public/projects', uniqid() . '_project_img.'.$project_img->getClientOriginalExtension());

        $project->save();
        return back();
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
