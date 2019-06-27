<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Founder;
use Session;

class FoundersController extends Controller
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
        $founders = Founder::where('lang', $lang)->get();
        return view('backoffice.founders.index')->with('founders', $founders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.founders.create');
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
            'name' => 'required|string',
            'description' => 'required|string',
            'founder_image' => 'required|mimes:jpeg,jpg,png',
            'lang' => 'string|max:2|min:2',
        ]);
        
        $founder = new Founder();

        $founder->name = $request['name'];
        $founder->description = $request['description'];
        $founder->lang = $request['lang'];

        $founder_image = $request->file('founder_image');
        $path = $founder_image->storeAs('public/founders', uniqid() . '_founder_image.'.$founder_image->getClientOriginalExtension());
        $founder->image = $path;

        $founder->save();

        return redirect(route('backoffice.founders.index').'?lang='.$founder->lang)->with('status', 'Founder added successfuly');;
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
        $founder = Founder::find($id);
        if ($founder) {
            return view('backoffice.founders.edit')->with('founder', $founder);
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
            'name' => 'required|string',
            'description' => 'required|string',
            'founder_image' => 'nullable|mimes:jpeg,jpg,png',
            'lang' => 'string|max:2|min:2',
        ]);

        $founder = Founder::find($id);

        if ($founder) {

            $founder->name = $request['name'];
            $founder->description = $request['description'];
            $founder->lang = $request['lang'];

            $founder_image = $request->file('founder_image');
            if ($founder_image  ) {
                $path = $founder_image->storeAs('public/founders', uniqid() . '_founder_image.'.$founder_image->getClientOriginalExtension());
                $founder->image = $path;
            }

            $founder->save();

            return redirect(route('backoffice.founders.index').'?lang='.$founder->lang)->with('status', 'Founder updated successfuly');;
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
        $founder = Founder::find($id);
        if ($founder) {
            $founder->delete();
            return back()->with('status', 'Founder deleted successfuly');
        }

        abort(404);
    }
}
