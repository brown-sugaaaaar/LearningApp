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

    public function update(Request $request, $id) 
    {
        $contact = Contact::find($id);
        $contact->update($request->all());

        return redirect('admin/contacts');
    }

    public function destroy($id)
    {
        $contact = Contact::find($id);
        $contact->delete();

        return redirect('/admin/contacts');
    }
}
