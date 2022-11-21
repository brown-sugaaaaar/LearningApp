<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function index()
    {
        return view('contact.form');
    }


    public function confirm(Request $request)
    {
        $inputs = $request->all();
        return view('contact.confirm', [
            'inputs' => $inputs
        ]);
    }


    public function store(Request $request)
    {
        $inputs = Contact::create($request->all());
        return view('contact.thanks');
    }


    public function show(Contact $contact)
    {
        //
    }


    public function edit(Contact $contact)
    {
        //
    }


    public function update(Request $request, Contact $contact)
    {
        //
    }


    public function destroy(Contact $contact)
    {
        //
    }
}
