<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;
use App\Contact;
use App\Founder;
use App\Setting;
use Session;

class MainController extends Controller
{
    public function index() 
    {
        $home_title = Setting::where('key', 'home_title')->where('lang', Session::get('lang'))->first();
        $home_detail = Setting::where('key', 'home_detail')->where('lang', Session::get('lang'))->first();

        $first_image = Setting::where('key', 'first_image')->first();
        $first_image_responsive = Setting::where('key', 'first_image_responsive')->first();
        $second_image = Setting::where('key', 'second_image')->first();
        $second_image_responsive = Setting::where('key', 'second_image_responsive')->first();
        $third_image = Setting::where('key', 'third_image')->first();
        $third_image_responsive = Setting::where('key', 'third_image_responsive')->first();
        $founders_image = Setting::where('key', 'founders_image')->first();
        $founders_image_responsive = Setting::where('key', 'founders_image_responsive')->first();
        $contact_image = Setting::where('key', 'contact_image')->first();
        $contact_image_responsive = Setting::where('key', 'contact_image_responsive')->first();

        $projects = Project::where('lang', Session::get('lang'))->get();
        $founders = Founder::where('lang', Session::get('lang'))->get();
        $contacts = Contact::where('lang', Session::get('lang'))->get();

        $data = [
            'projects' => $projects,
            'founders' => $founders,
            'contacts' => $contacts,
            'home_title' => $home_title,
            'home_detail' => $home_detail,
            'first_image' => $first_image,
            'first_image_responsive' => $first_image_responsive,
            'second_image' => $second_image,
            'second_image_responsive' => $second_image_responsive,
            'third_image' => $third_image,
            'third_image_responsive' => $third_image_responsive,
            'founders_image' => $founders_image,
            'founders_image_responsive' => $founders_image_responsive,
            'contact_image' => $contact_image,
            'contact_image_responsive' => $contact_image_responsive,
        ];

        return view('home')->with($data);
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
