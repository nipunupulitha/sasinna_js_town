<?php

namespace App\Http\Controllers;

use App\Mail\TestMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
//     public function sendEmail(){
//         $details =[
//             'title'=>'hi mail',
//             'body' => 'this is for testing mail using gmail'
//         ];

//         Mail::to("nipunupulitha6969@gmail.com")->send(new TestMail($details));
//         return "Email Sent";
//     }
}
