<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\PageMail;

class EmailsController extends Controller
{
	public function __construct()
    {
        
    }

    public function sendMail(Request $request)
    {
        $data = $request->all();
        Mail::send('email.pageMail', $data, function($message)
        {
            $message->to('oneline1821@gmail.com', 'Pagina Web D-sso')->subject('Nueva Consulta');
        });
        
    }
}
