<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function sendMessage(Request $request) {
        $data = $request->all();
        \Mail::to('akel.dev@gmail.com')->send(new ContactFormMail($data));

        return Redirect::route('home')->with('success', 'Email sent successfully');
    }
}
