<?php

namespace App\Http\Controllers;
use App\Mail\TestMail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use function Ramsey\Uuid\v1;

class MailController extends Controller
{
    public function sendEmail()
    {
        $details= [
            'title' => 'Friki Calendar',
            'body' => 'Te acabas de suscribir correctamente a este evento',

        ];
     Mail::to("lauragarciacastelao@hotmail.com")-> send(new TestMail($details));
     return view('emails.send-email');
    }
}
