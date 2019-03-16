<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Http\Requests\ContactFormRequest;
use App\Contact;
class ContactController extends Controller
{
    //
	public function newContact(){
		$contacts = Contact::where('user_id', 1);
		return view('home.add_contact');	
	}
	
	public function addNewContact(ContactFormRequest $request){
		$contact = new Contact(array(
		'name' => $request->get('name'),
		'email' => $request->get('email'),
		'mobile_phone' => $request->get('mobile_phone'),
		'work_phone' => $request->get('work_phone'),
		'user_id' => Auth::user()->id
		));
		$contact->save();
		return redirect('/home')->with('status', 'New contact added succesfully');
	}
	
	public function allContact(){
		$contacts = Contact::where('user_id',Auth::user()->id )->get();;
		return view('home', compact('contacts'));	
	}
}
