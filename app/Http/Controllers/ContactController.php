<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

       return view('index', [
        'contacts' =>  Contact::orderBy('created_at', 'desc')->get()
    ]);
    }

    public function show($id){
        return view('show', [
            'contact' => Contact::findOrFail($id)
        ]);
    }

    public function create(){
        return view('create');
    }

    public function edit($id){

        return view('edit', [
            'contact' => Contact::findOrFail($id)
        ]);
    }

    public function store(){
        request()->validate([
        // 1. full_name: only letters, spaces, hyphens, apostrophes; 2–15 chars
        'full_name' => [
            'required',
            'min:2',
            'max:15',
            'regex:/^[a-zA-Z\s\'\-]+$/'
        ],

        // 2. phone: match phone formats (example: +234-800-123-4567 or 0800-123-4567)
        'phone' => [
            'required',
            'regex:/^\+?\d{1,3}[- ]?\d{3}[- ]?\d{3,4}[- ]?\d{3,4}$/'
        ],

        // 3. relationship: only letters/spaces, 2–20 chars
        'relationship' => [
            'required',
            'min:2',
            'max:20',
            'regex:/^[a-zA-Z\s]+$/'
        ],

        // 4. bio: at least 10 chars, only letters, numbers, punctuation
        'bio' => [
            'required',
            'min:10',
            'regex:/^[a-zA-Z0-9\s.,!?\'"-]+$/'
        ]
    ], [
        // Custom error messages
        'full_name' => 'Full name must only contain letters, spaces, hyphens, or apostrophes.',
        'phone' => 'Phone number format is invalid.',
        'relationship' => 'Relationship must only contain letters and spaces.',
        'bio' => 'Bio contains invalid characters.'
    ]);

        // // Insert into the database
        Contact::create([
            'full_name' => request('full_name'),
            'phone' => request('phone'),
            'relationship' => request('relationship'),
            'bio' => request('bio')
        ]);

        return redirect('/');
    }

    public function update($id){

        request()->validate([
        // 1. full_name: only letters, spaces, hyphens, apostrophes; 2–15 chars
        'full_name' => [
            'required',
            'min:2',
            'max:15',
            'regex:/^[a-zA-Z\s\'\-]+$/'
        ],

        // 2. phone: match phone formats (example: +234-800-123-4567 or 0800-123-4567)
        'phone' => [
            'required',
            'regex:/^\+?\d{1,3}[- ]?\d{3}[- ]?\d{3,4}[- ]?\d{3,4}$/'
        ],

        // 3. relationship: only letters/spaces, 2–20 chars
        'relationship' => [
            'required',
            'min:2',
            'max:20',
            'regex:/^[a-zA-Z\s]+$/'
        ],

        // 4. bio: at least 10 chars, only letters, numbers, punctuation
        'bio' => [
            'required',
            'min:10',
            'regex:/^[a-zA-Z0-9\s.,!?\'"-]+$/'
        ]
        ], [
            // Custom error messages
            'full_name' => 'Full name must only contain letters, spaces, hyphens, or apostrophes.',
            'phone' => 'Phone number format is invalid.',
            'relationship' => 'Relationship must only contain letters and spaces.',
            'bio' => 'Bio contains invalid characters.'
        ]);

        // Find the record
        $contact = Contact::findOrFail($id);

            // update the database record
        $contact->update([
                'full_name' => request('full_name'),
                'phone' => request('phone'),
                'relationship' => request('relationship'),
                'bio' => request('bio')
            ]);

        return redirect("/show/{$contact->id}")
        ->with('success', 'Contact updated successfully!');
    }

    public function destroy($id){
        $contact = Contact::findOrFail($id);

        $contact->delete();

       return redirect('/')
        ->with('deleted', 'Contact successfully deleted');
    }
}
