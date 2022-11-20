<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    public function index() 
    {
        return view('admin.contacts.index');
    }
}
