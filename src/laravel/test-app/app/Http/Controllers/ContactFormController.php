<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    public function index()
    {
        $contacts = ContactForm::select('id', 'name', 'title', 'created_at')->get();
        return view('contacts.index', compact('contacts'));
    }

    public function create()
    {
        return view('contacts.create');
    }

    public function store(Request $request)
    {
        // dd($request->contact);
        ContactForm::create([
            'name' => $request->name,
            'email' => $request->email,
            'url' => $request->url,
            'title' => $request->title,
            'gender' => $request->gender,
            'contact' => $request->contact,
            'age' => $request->age,
        ]);

        return to_route('contacts.index');
    }

    public function show($id)
    {
        $contact = ContactForm::find($id);

        return view('contacts.show', compact('contact'));
    }

    public function edit($id)
    {
        $contact = ContactForm::find($id);

        return view('contacts.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = ContactForm::find($id);

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->url = $request->url;
        $contact->title = $request->title;
        $contact->gender = $request->gender;
        $contact->contact = $request->contact;
        $contact->age = $request->age;

        $contact->save();

        return to_route('contacts.index');
    }

    public function destroy($id)
    {
        $contact = ContactForm::find($id);
        $contact->delete();

        return to_route('contacts.index');
    }
}
