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
    public function index(Request $request)
    {
        $lang = $request->lang;
        if (!$lang) {
            $lang = 'en';
        }
        $projects = Project::where('lang', $lang)->get();
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
            'sidenav_detail' => 'required',
            'sidenav_img' => 'required',
            'project_img' => 'required',
            'lang' => 'string|max:2|min:2',
        ]);


        $project = new Project();
        $project->title = $request->input('title');
        $home_text = str_replace('</p>', '', $request->input('home_text'));
        $project->home_text = str_replace('<p>', '', $home_text);
        $project->sidenav_detail = $request->input('sidenav_detail');
        
        $home_background = $request->file('home_background');
        $path = $home_background->storeAs('public/projects', uniqid() . '_home_background.'.$home_background->getClientOriginalExtension());
        $project->home_background = $path;

        $sidenav_img = $request->file('sidenav_img');
        $path = $sidenav_img->storeAs('public/projects', uniqid() . '_sidenav_img.'.$sidenav_img->getClientOriginalExtension());
        $project->sidenav_img = $path;

        $project_img = $request->file('project_img');
        $path = $project_img->storeAs('public/projects', uniqid() . '_project_img.'.$project_img->getClientOriginalExtension());
        $project->project_img = $path;

        $project->lang = $request['lang'];

        $project->save();
        return redirect(route('backoffice.projects.contents.index', $project->id))->with('status', 'Project created successfuly');;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $project = Project::find($id);
        if ($project) {
            return view('backoffice.projects.edit')->with('project', $project);
        }
        abort(404);
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
        $request->validate([
            'title' => 'required',
            'home_text' => 'required',
            'sidenav_detail' => 'required',
        ]);

        $project = Project::find($id);
        if ($project) {
            $project->title = $request->input('title');
            $home_text = str_replace('</p>', '', $request->input('home_text'));
            $project->home_text = str_replace('<p>', '', $home_text);
            $project->sidenav_detail = $request->input('sidenav_detail');
            
            $home_background = $request->file('home_background');
            if ($home_background) {
                $path = $home_background->storeAs('public/projects', uniqid() . '_home_background.'.$home_background->getClientOriginalExtension());
                $project->home_background = $path;
            }
    
            $sidenav_img = $request->file('sidenav_img');
            if ($sidenav_img) {
                $path = $sidenav_img->storeAs('public/projects', uniqid() . '_sidenav_img.'.$sidenav_img->getClientOriginalExtension());
                $project->sidenav_img = $path;
            }
    
            $project_img = $request->file('project_img');
            if ($project_img) {
                $path = $project_img->storeAs('public/projects', uniqid() . '_project_img.'.$project_img->getClientOriginalExtension());
                $project->project_img = $path;
            }
    
            $project->save();
            return redirect()->route('backoffice.projects.index')->with('status', 'Project updated successfuly');
        }
        abort(404);
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
