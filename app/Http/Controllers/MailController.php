<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Faker\Core\DateTime;
use Illuminate\Contracts\Mail\Mailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{

    public function sendEmail()
    {
        $details = [
            'title' => 'Friki Calendar',
            'body' => 'Gracias por suscribirte',
            'link' => 'https://zoom.us/',
        


        ];
     
   

        Mail::to("alt.s3-dogawsw2@yopmail.com")->send(new TestMail($details));
        return "Email enviado";
    }
}
