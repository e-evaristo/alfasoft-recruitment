<?php
namespace App\Services;

use App\Models\Contact;

class ContactService {

    public function list() {
        return Contact::orderBy('id','DESC')->paginate(10);
    }

    public function create($data)
    {
        Contact::create($data);
    }

    public function update(Contact $contact, $data)
    {
        $contact->update($data);
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();
    }

}
