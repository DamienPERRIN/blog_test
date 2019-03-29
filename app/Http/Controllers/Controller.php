<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function send(Request $request)
    {
        $title = $request->input('title');
        $content = $request->input('content');
        $attach = $request->file('file');

        Mail::send('send', ['title' => $title, 'content' => $content], function ($message)
        {
            $message->from('dperrin@alteca.fr', 'Pain BEURRE');
            $message->to('38a950f670-9a2119@inbox.mailtrap.io');
            $message->attach($attach);
            $message->subject("Bonjour de Laravel");

//            $message->from($address, $name = null);
//            $message->sender($address, $name = null);
//            $message->to($address, $name = null);
//            $message->cc($address, $name = null);
//            $message->bcc($address, $name = null);
//            $message->replyTo($address, $name = null);
//            $message->subject($subject);
//            $message->priority($level);
//            $message->attach($pathToFile, array $options = []);

        });

        return $response()->json(['message' => 'Request completed']);
    }
}
