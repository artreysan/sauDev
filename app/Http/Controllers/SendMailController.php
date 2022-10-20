<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\SolicitudMailable;
use App\Models\Solicitud;
use Illuminate\Support\Facades\Mail;

class SendMailController extends Controller
{
    public function sendMail(){
        $solicitud = new Solicitud();
        $correo = new SolicitudMailable($solicitud);
        Mail::to('rarturo899@gmail.com')->send($correo->attach(storage_path('pdf/1664235532_sau.pdf')));
        return "Menasaje enviado";
    }
    
}
