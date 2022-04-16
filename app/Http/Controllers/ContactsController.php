<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactStoreRequest;
use App\Http\Requests\ContactUpdateRequest;
use App\Models\Contact;
use App\Services\ContactService;
use Illuminate\Http\Request;

class ContactsController extends Controller
{
    private ContactService $service;

    public function __construct(ContactService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        $contacts = $this->service->list();
        return view('app.contacts.index', ['contacts' => $contacts]);
    }

    public function show(Contact $contact)
    {
        return view('app.contacts.show', ['contact' => $contact]);
    }

    public function delete(Contact $contact)
    {
        $this->service->destroy($contact);
        return redirect()->route('dashboard')->with('message', 'Contact deleted successfully');
    }

    public function edit(Contact $contact)
    {
        return view('app.contacts.edit', ['contact' => $contact]);
    }

    public function update(ContactUpdateRequest $request, Contact $contact)
    {
        $validated = $request->validated();
        $this->service->update($contact, $validated);
        return redirect()->route('dashboard')->with('message', 'Contact updated successfully');
    }

    public function create()
    {
        return view('app.contacts.create');
    }

    public function store(ContactStoreRequest $request)
    {
        $validated = $request->validated();
        $this->service->create($validated);
        return redirect()->route('dashboard')->with('message', 'Contact created successfully');
    }

}
