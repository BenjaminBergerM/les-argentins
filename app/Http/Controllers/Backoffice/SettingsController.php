<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Setting;

class SettingsController extends Controller
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

        $langs = Setting::where('key', 'home_en_button')->orWhere('key', 'home_es_button')->orWhere('key', 'home_fr_button')->get();
        $home_title = Setting::where('key', 'home_title')->where('lang', $lang)->first();
        $home_detail = Setting::where('key', 'home_detail')->where('lang', $lang)->first();
        $first_image = Setting::where('key', 'first_image')->first();
        $first_image_responsive = Setting::where('key', 'first_image_responsive')->first();
        $second_image = Setting::where('key', 'second_image')->first();
        $second_image_responsive = Setting::where('key', 'second_image_responsive')->first();
        $third_image = Setting::where('key', 'third_image')->first();
        $third_image_responsive = Setting::where('key', 'third_image_responsive')->first();
        $founders_image = Setting::where('key', 'founders_image_image')->first();
        $founders_image_responsive = Setting::where('key', 'founders_image_responsive')->first();
        $contact_image = Setting::where('key', 'contact_image')->first();
        $contact_image_responsive = Setting::where('key', 'contact_image_responsive')->first();

        $data = [
            'langs' => $langs,
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

        return view('backoffice.settings.index')->with($data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function lang_update(Request $request)
    {
        $home_en_button = Setting::where('key', 'home_en_button')->first();
        $home_es_button = Setting::where('key', 'home_es_button')->first();
        $home_fr_button = Setting::where('key', 'home_fr_button')->first();

        $home_en_button->value = 0;
        $home_es_button->value = 0;
        $home_fr_button->value = 0;


        if ($request['home_en_button']) {
            $home_en_button->value = 1;
        }
        if ($request['home_es_button']) {
            $home_es_button->value = 1;
        }
        if ($request['home_fr_button']) {
            $home_fr_button->value = 1;
        }

        $home_en_button->save();
        $home_es_button->save();
        $home_fr_button->save();

        return Redirect::to(URL::previous() . "#lang-button")->with('status', 'Languages buttons updated successfuly');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function home_texts_update(Request $request)
    {
        $request->validate([
            'home_title' => 'required|string',
            'home_detail' => 'required|string',
            'lang' => 'string|max:2|min:2',
        ]);

        $home_title = Setting::where('key', 'home_title')->where('lang', $request['lang'])->first();
        $home_title->value = $request['home_title'];
        $home_title->save();

        $home_detail = Setting::where('key', 'home_detail')->where('lang', $request['lang'])->first();
        $home_detail->value = $request['home_detail'];
        $home_detail->save();

        return back()->with('status', 'Home texts updated successfuly');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function home_images_update(Request $request)
    {
        $request->validate([
            'first_image' => 'nullable|mimes:jpeg,jpg,png,gif',
            'first_image_responsive' => 'nullable|mimes:jpeg,jpg,png,gif',
            'second_image' => 'nullable|mimes:jpeg,jpg,png,gif',
            'second_image_responsive' => 'nullable|mimes:jpeg,jpg,png,gif',
            'third_image' => 'nullable|mimes:jpeg,jpg,png,gif',
            'third_image_responsive' => 'nullable|mimes:jpeg,jpg,png,gif',
            'founders_image' => 'nullable|mimes:jpeg,jpg,png,gif',
            'founders_image_responsive' => 'nullable|mimes:jpeg,jpg,png,gif',
            'contact_image' => 'nullable|mimes:jpeg,jpg,png,gif',
            'contact_image_responsive' => 'nullable|mimes:jpeg,jpg,png,gif',
        ]);

        $first_image_db = Setting::where('key', 'first_image')->first();
        $first_image = $request->file('first_image');
        if ($first_image && $first_image_db) {
            $path = $first_image->storeAs('public/home', uniqid() . '_first_image.'.$first_image->getClientOriginalExtension());
            $first_image_db->value = $path;
            $first_image_db->save();
        }

        $first_image_responsive_db = Setting::where('key', 'first_image_responsive')->first();
        $first_image_responsive = $request->file('first_image_responsive');
        if ($first_image_responsive && $first_image_responsive_db) {
            $path = $first_image_responsive->storeAs('public/home', uniqid() . '_first_image_responsive.'.$first_image_responsive->getClientOriginalExtension());
            $first_image_responsive_db->value = $path;
            $first_image_responsive_db->save();
        }

        $second_image_db = Setting::where('key', 'second_image')->first();
        $second_image = $request->file('second_image');
        if ($second_image && $second_image_db) {
            $path = $second_image->storeAs('public/home', uniqid() . '_second_image.'.$second_image->getClientOriginalExtension());
            $second_image_db->value = $path;
            $second_image_db->save();
        }

        $second_image_responsive_db = Setting::where('key', 'second_image_responsive')->first();
        $second_image_responsive = $request->file('second_image_responsive');
        if ($second_image_responsive && $second_image_responsive_db) {
            $path = $second_image_responsive->storeAs('public/home', uniqid() . '_second_image_responsive.'.$second_image_responsive->getClientOriginalExtension());
            $second_image_responsive_db->value = $path;
            $second_image_responsive_db->save();
        }

        $third_image_db = Setting::where('key', 'third_image')->first();
        $third_image = $request->file('third_image');
        if ($third_image && $third_image_db) {
            $path = $third_image->storeAs('public/home', uniqid() . '_third_image.'.$third_image->getClientOriginalExtension());
            $third_image_db->value = $path;
            $third_image_db->save();
        }

        $third_image_responsive_db = Setting::where('key', 'third_image_responsive')->first();
        $third_image_responsive = $request->file('third_image_responsive');
        if ($third_image_responsive && $third_image_responsive_db) {
            $path = $third_image_responsive->storeAs('public/home', uniqid() . '_third_image_responsive.'.$third_image_responsive->getClientOriginalExtension());
            $third_image_responsive_db->value = $path;
            $third_image_responsive_db->save();
        }

        $founders_image_db = Setting::where('key', 'founders_image')->first();
        $founders_image = $request->file('founders_image');
        if ($founders_image && $founders_image_db) {
            $path = $founders_image->storeAs('public/home', uniqid() . '_founders_image.'.$founders_image->getClientOriginalExtension());
            $founders_image_db->value = $path;
            $founders_image_db->save();
        }

        $founders_image_responsive_db = Setting::where('key', 'founders_image_responsive')->first();
        $founders_image_responsive = $request->file('founders_image_responsive');
        if ($founders_image_responsive && $founders_image_responsive_db) {
            $path = $founders_image_responsive->storeAs('public/home', uniqid() . '_founders_image_responsive.'.$founders_image_responsive->getClientOriginalExtension());
            $founders_image_responsive_db->value = $path;
            $founders_image_responsive_db->save();
        }

        $contact_image_db = Setting::where('key', 'contact_image')->first();
        $contact_image = $request->file('contact_image');
        if ($contact_image && $contact_image_db) {
            $path = $contact_image->storeAs('public/home', uniqid() . '_contact_image.'.$contact_image->getClientOriginalExtension());
            $contact_image_db->value = $path;
            $contact_image_db->save();
        }

        $contact_image_responsive_db = Setting::where('key', 'contact_image_responsive')->first();
        $contact_image_responsive = $request->file('contact_image_responsive');
        if ($contact_image_responsive && $contact_image_responsive_db) {
            $path = $contact_image_responsive->storeAs('public/home', uniqid() . '_contact_image_responsive.'.$contact_image_responsive->getClientOriginalExtension());
            $contact_image_responsive_db->value = $path;
            $contact_image_responsive_db->save();
        }

        return back()->with('status', 'Home images updated successfuly');
    }
}
