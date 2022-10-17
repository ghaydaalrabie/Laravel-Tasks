<?php

namespace
App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;
use Mail;




class ContactController extends Controller
{

    public function index()
    {

        return view('contact-us');
    }

    public function save(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|Regex:/^[\D]+$/i|max:100',
            'email' => 'required|email|max:255|unique:contacts' ,
            'subject' => 'required|min:5',
            'phone_number' => 'required|digits:10',
        ]);

        $contact = new Contact;

        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->subject = $request->subject;
        $contact->phone_number = $request->phone_number;
        $contact->message = $request->message;

        $contact->save();

        return back()->with('success', 'Thank you for contact us!');
    }
}
