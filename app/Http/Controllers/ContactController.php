<?php

namespace App\Http\Controllers;

use App\Jobs\ProcessContactMail;
use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function propertyInquiry(Request $request, $property_id) {
        $request->validate([
            'name' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255',
            'message' => 'required|max:255',
        ]);

        $contact = new Contact();
        $contact->name = $request->name;
        $contact->phone = $request->phone;
        $contact->email = $request->email;
        $contact->message = $request->message;        
        $contact->save();
        $contact->PageURL = route('single-property', $property_id) . ' website.';
        // send user & admin message
        ProcessContactMail::dispatch($contact);
        // Mail::send(new ContactMail($contact));


        return redirect(route('single-property', $property_id))->with(['message' => 'Your message has been sent.']);
    }
}
