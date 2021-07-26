<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class SendEmailController extends Controller
{
function send(Request $req){
    $this->validate($req, [
    'name' => 'required',
    'email' => 'required|email',
    'message' => 'required'
    ]);
$data = array(
'name' => $req->name,
'email' => $req->email,
'phone' => $req->phone,
'message' => $req->message,
);
mail::to('anasnguroje@gmail.com')->send(new SendMail($data));
return back()->with('success', 'Thanks, For Contacting Us!');
}
}
