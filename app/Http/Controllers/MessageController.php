<?php
namespace App\Http\Controllers;
use App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;

class MessageController extends Controller
{
    public function store()
    {
        $msg =request()->validate([
            'name'=>'required',
            'email'=>'required|email',
            'subject'=>'required',
            'content'=>'required|min:3'
        ]);
        
       //Enviar email
       Mail::to('hkaren506@gmail.com')->send(new MessageReceived($msg));
      
        return back()->with('status', 'Recibimos tú mensaje, te responderemos en menos de 24 horas.');
    }
}
                                                                                                    