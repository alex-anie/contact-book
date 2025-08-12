<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){

       return view('index', [
        'contacts' =>  Contact::all()
    ]);
    }

    public function show($id){
         return view('show', [
            'contact' => Contact::find($id)
        ]);
    }

    public function create(){
        return view('create');
    }

    public function edit(){
        return view('edit');
    }
}
