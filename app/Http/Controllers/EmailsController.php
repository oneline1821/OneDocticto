<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmailsController extends Controller
{
	public function __construct()
    {
        
    }

    public function sendMail(Request $request)
    {
        dd('holas');
    }
}
