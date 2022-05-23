<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;
use Illuminate\Support\Facades\Auth;
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
        $contact->user_id = Auth::user()->id;
        $contact->save();
        return redirect()->route('dashboard', ['saved' => true]);
    }

    public function list_contacts()
    {
        // return view('list_contacts', ['contacts' => DB::table('contacts')->paginate(10)]);
        return view('list_contacts', ['contacts' => Contact::with('user')->paginate(10)]);
    }

    public function view_contact($id)
    {
        return Contact::findOrFail($id);
    }
}
