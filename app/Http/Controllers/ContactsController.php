<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('app.contacts.index', ['contacts' => $contacts]);
    }
}
