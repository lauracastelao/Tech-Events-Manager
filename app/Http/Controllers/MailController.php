<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details= [
            'title' => 'Friki Calendar',
            'body' => 'Te acabas de suscribir correctamente a este evento',

        ];
     Mail::to("lauragarciacastelao@hotmail.com")-> send(new TestMail($details));
     return "Email Sent";
    
    }
}
