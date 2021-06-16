<?php

namespace App\Http\Controllers;

use App\Mail\NewComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Mailjet\LaravelMailjet\Facades\Mailjet;
use Mailjet\LaravelMailjet\Contracts\CampaignDraftContract;

class EmailController extends Controller
{
    public function sendEmail() {
    return 'yo'; 
    }   
}
