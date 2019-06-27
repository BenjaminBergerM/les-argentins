<?php

namespace App\Http\Controllers\Backoffice;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contact;

class ContactController extends Controller
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
        $contacts = Contact::where('lang', $lang)->get();
        return view('backoffice.contact.index')->with('contacts', $contacts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backoffice.contact.create');
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
            'title' => 'string',
            'name' => 'string',
            'phone' => 'string',
            'email' => 'email',
            'color' => 'string',
            'lang' => 'string|max:2|min:2',
        ]);

        $contact = new Contact();
        $contact->title = $request['title'];
        $contact->name = $request['name'];
        $contact->phone = $request['phone'];
        $contact->email = $request['email'];
        $contact->color = $request['color'];
        $contact->lang = $request['lang'];
        $contact->save();

        return redirect(route('backoffice.contact.index').'?lang='.$contact->lang)->with('status', 'Contact added successfuly');;
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
        $contact = Contact::find($id);
        if ($contact) {
            return view('backoffice.contact.edit')->with('contact', $contact);
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
        $contact = Contact::find($id);
        if ($contact) {
            $request->validate([
                'title' => 'string',
                'name' => 'string',
                'phone' => 'string',
                'email' => 'email',
                'color' => 'string',
                'lang' => 'string|max:2|min:2',
            ]);

            $contact->title = $request['title'];
            $contact->name = $request['name'];
            $contact->phone = $request['phone'];
            $contact->email = $request['email'];
            $contact->color = $request['color'];
            $contact->lang = $request['lang'];
            $contact->save();

            return redirect(route('backoffice.contact.index').'?lang='.$contact->lang)->with('status', 'Contact updated successfuly');;
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
        $contact = Contact::find($id);
        if ($contact) {
            $contact->delete();
            return back()->with('status', 'Contact deleted successfuly');
        }
        abort(404);
    }
}
