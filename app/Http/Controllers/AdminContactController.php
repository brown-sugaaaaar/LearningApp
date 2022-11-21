<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index() 
    {
        $contacts = Contact::all();
        return view('admin.contacts.index' ,[
            'contacts' => $contacts
        ]);
    }

    public function edit($id) 
    {
        $contact = Contact::find($id);
        return view('admin.contacts.edit' ,[
            'contact' => $contact
        ]);
    }
}
