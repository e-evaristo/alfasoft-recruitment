<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactsController extends Controller
{

    public function index()
    {
        $contacts = Contact::paginate(10);
        return view('app.contacts.index', ['contacts' => $contacts]);
    }

    public function show(Contact $contact)
    {
        return view('app.contacts.show', ['contact' => $contact]);
    }

    public function delete(Contact $contact)
    {
        $contact->delete();
        return redirect()->route('dashboard')->with('message', 'Contact deleted successfully');
    }

    public function edit(Contact $contact)
    {
        return view('app.contacts.edit', ['contact' => $contact]);
    }

    public function update(ContactUpdateRequest $request, Contact $contact)
    {
        $validated = $request->validated();
        $contact->update($validated);
        return redirect()->route('dashboard')->with('message', 'Contact updated successfully');
    }

    public function create()
    {
        return view('app.contacts.create');
    }

    public function store(ContactStoreRequest $request)
    {
        $validated = $request->validated();
        Contact::create($validated);
        return redirect()->route('dashboard')->with('message', 'Contact created successfully');
    }

}
