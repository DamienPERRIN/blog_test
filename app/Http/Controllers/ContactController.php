<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class ContactController extends Controller
{
    public function create()
    {
        //
    }

    public function sendmail()
    {
//        $user = Auth::user();
        \Mail::to('38a950f670-5213bc@inbox.mailtrap.io')->send(new Contact);
        return redirect('/');
    }
}
