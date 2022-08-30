<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller{  

public function sendEmail ()
{
    $details= [
    'title' => 'Friki Calendar',
    'body' => 'Gracias por suscribirte',
    ];

    Mail::to("alt.s3-dogawsw2@yopmail.com")->send(new TestMail($details));
    return "Email enviado";
}
}