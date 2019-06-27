<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Contact;
use App\Founder;
use Session;

class MainController extends Controller
{
    public function index() 
    {
        $projects = Project::where('lang', Session::get('lang'))->get();
        $founders = Founder::where('lang', Session::get('lang'))->get();
        $contacts = Contact::where('lang', Session::get('lang'))->get();
        return view('home')->with('projects', $projects)->with('founders', $founders)->with('contacts', $contacts);
    }

    public function show($id)
    {
        $project = Project::find($id);
        if ($project) {
            return view('project')->with('project', $project);
        }
        abort(404);
    }

    public function locale($locale)
    {
        Session::put('lang', $locale);
        return redirect()->back();
    }
}
