<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendEmailController extends Controller
{
    public function index(){
        Mail::to("joshstorage123@gmail.com")->send(new sendEmail());
    }
}
