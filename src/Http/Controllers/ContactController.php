<?php

namespace Khayrulshanto\Contact\Http\Controllers;

use App\Http\Controllers\Controller;
use Khayrulshanto\Contact\Mail\ConatctMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Khayrulshanto\Contact\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact::contact');
    }

    public function send(Request $request)
    {
        try {
            Mail::to(config('contact.send_email_to'))->send(new ConatctMailable($request->message, $request->name));
            Contact::create($request->all());

            return redirect()->back();
        } catch (\Throwable $th) {
            $message = $th->getMessage();
            return  redirect()->back()->with("Error");
        }
    }
}
