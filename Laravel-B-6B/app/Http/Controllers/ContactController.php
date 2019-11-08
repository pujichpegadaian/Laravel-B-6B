<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function Tampil(){
    	$contacts = Contact::all();

    	return view('message', [
    		'contacts' => $contacts
    	]);
    }

    public function Simpan(Request $req){
    	$contacts = new Contact(); 

    	$contacts->firstName 	= $req->firstname;
    	$contacts->lastName 	= $req->lastname;
    	$contacts->phoneNumber	= $req->phone;
    	$contacts->email 		= $req->email;
    	$contacts->message 		= $req->message; 

    	$contacts->save();

    	return redirect()->Route('messageshow');
    }
}
