<?php

namespace App\Http\Controllers;

use App\Mail\NewComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function sendEmail() {

        $to_email = "t.ducugnon@gmail.com";

        Mail::to($to_email)->send(new NewComment);

        if(Mail::failures() != 0) {
            return "<p> Success! Your E-mail has been sent.</p>";
        }

        else {
            return "<p> Failed! Your E-mail has not sent.</p>";
        }
    }
}
