<?php

namespace App\Http\Controllers;

use App\Mail\FormularioMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function __invoke(){
        return view('mail');
    }

    public function store(Request $request){
        $correo = new FormularioMailable($request->all());
        Mail::to("santi@gmail.com")->send($correo);

        return view('enviado');
    }
}