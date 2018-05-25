<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactsController extends Controller
{
    public function index()
{
    $contacts = contact::all();
    //$contacts = Contact::latest('updated_at')->get();
 
    return view('contacts.index', compact('contacts'));
}

}
