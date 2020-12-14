<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContactController extends Controller
{
    public function sendMessage(Request $request) {
        $data = $request->all();
        // \Mail::to('akel.dev@gmail.com')->send(new ContactFormMail($data));

        try {
            // \Mail::send([], [], function ($m) use ($data) {
            //     $m->from($data['email'], $data['name']);
            //     $m->to('akel.dev@gmail.com');
            //     $m->subject("Contact form submission");
            //     $m->setBody(view("contac.send-email", ['form' => $data]), 'text/html');
            // });
            $msg = view("contact.send-email", ['form' => $data]);
            $headers = "From: " . strip_tags($data['email']) . "\r\n";
            $headers .= "Reply-To: " . strip_tags($data['email']) . "\r\n";
            $headers .= "MIME-Version: 1.0\r\n";
            $headers .= "Content-Type: text/html; charset=utf-8\r\n";
            mail("akel.dev@gmail.com", "Contact form submission", $msg, $headers);
            return Redirect::route('home')->with('success', 'Message sent successfully');
        } catch(\Exception $e) {
            return Redirect::route('home')->with('danger', 'Error occured while sending email');
        }
    }
}
