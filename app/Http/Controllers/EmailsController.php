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
        Mail::send('email.pageMail', [], function ($message){
            $message->to('oneline1821@gmail.com')->subject('Expertphp.in - Testing mail');
        });
        
    	// Mail::send(['text'=>'email.pageMail'],['name','Sarthak'], function($mesaje){
    	// 	$mesaje->to('oneline1821@gmail.com','To yo mismo')->subject('Test Email');
    	// 	$mesaje->from('oneline1821@gmail.com','Mi otro yo');
    	// });
        //Mail::to('kiramauco@gmail.com')->send(new PageMail($request->content, 'mesaje de prueba'));
        //dd($request->telefono);
    }
}
