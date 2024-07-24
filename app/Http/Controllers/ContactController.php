<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    //la logique

    public function index(Request $req){
        //Recuperer tous les contacts
        $contacts = Contact::all();

        //passer les contacts a la vue
        return  view('welcome')->with("contacts",$contacts);
    }
    public function add(Request $req){
        $contact = new Contact;
        $contact->email = $req->email;
        $contact->phone = $req->phone;
        $contact->fullname = $req->name;

        $contact->save();
        return redirect('/');
    }

    public function addform(Request $req){
        //afficher le formulaire
        return  view('add-contact');
    }

}
