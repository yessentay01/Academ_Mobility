<?php

namespace App\Http\Controllers;

use App\Mail\NotifyMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function sendEmail()
    {

        $data = array('name'=>"Our Code World");
        // Path or name to the blade template to be rendered
        $template_path = 'emails.demoMail';

        Mail::send(['text'=> $template_path ], $data, function($message) {
            // Set the receiver and subject of the mail.
            $message->to('27428@iitu.edu.kz', 'Receiver Name')->subject('Laravel First Mail');
            // Set the sender
            $message->from('ye.kurmanbay@iitu.edu.kz','Our Code World');
        });

        return "Basic email sent, check your inbox.";
    }
}
