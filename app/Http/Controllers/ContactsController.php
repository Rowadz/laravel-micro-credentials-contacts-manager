<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\DB;

class ContactsController extends Controller
{
    public function create_contacts_view()
    {
        return view('create_contacts');
    }

    public function save_contacts(Request $request)
    {
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->phone = $request->input('phone');
        $contact->address = $request->input('address');
        $contact->save();
        return redirect()->route('home', ['saved' => true]);
    }

    public function list_contacts()
    {
        return view('list_contacts', ['contacts' => DB::table('contacts')->paginate(10)]);
    }
}
