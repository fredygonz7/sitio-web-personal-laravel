<?php

namespace App\Http\Controllers;

use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store()
    {
        $message = request()->validate(
            [
                'name'  => 'required',
                'email' => 'required|email',
                'subject' => 'required',
                'content' => 'required|min:3'
            ] 
            //,
            // [
            //     'name.required'  => 'Es necesario su nombre'
            // ]
        );
        Mail::to('fredgonz7@gmail.com')->queue(new MessageReceived($message));
        // return new MessageReceived($message);
        return back()->with('status',__('Message sent'));
    }
}
