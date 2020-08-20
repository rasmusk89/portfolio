<?php

namespace App\Http\Controllers;


use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactFormController extends Controller
{
    public function create() {
        return view('contact.create');
    }

    public function store(Request $request) {
        $data = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required',
        ]);
        Mail::to('rasmuskilk@gmail.com')->send(new ContactFormMail($data));

        return redirect('contact')->with('success', __('messages.thank_you'));
    }
}
