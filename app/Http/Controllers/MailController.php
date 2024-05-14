<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class MailController extends Controller
{
    public static function sendMail(array $data)
    {
        $to = 'rirchse@gmail.com';
        $data = ['name' => 'My name'];
        Mail::send('mail.email', $data, function($message) {
            $message->to('mrirstt@gmail.com', 'Mail Receiver Name')->subject('Subject');
            $message->from('info@olorienmaracamp.com');
        });
    }
}
