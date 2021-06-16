<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Comment;
use App\Mail\NewComment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function store (Request $request) {
        $comment = Comment::create([
            'username' => $request->input('username'),
            'title' => $request->input('title'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'offer_id' => $request->input('offer_id'),
            'user_id' => Auth::user()->id
        ]);

        $testmail = Offer::where('id', $comment->offer_id)->firstOrFail();
            $to_email = $testmail->email; // doit être égal à l'email de l'offre ou le commentaire a été posté
            Mail::to($to_email)->send(new NewComment);

            if(Mail::failures() != 0) {
                return redirect()->route('home')->with('success', 'Thanks for your comment');;
            }

            else {
                return "<p> Failed! Your E-mail has not sent.</p>";
            }
           
    }
    public function commentOffer($slug) 
    {   
        $comment = Comment::where('offer_id', $offers->id)->get();
        return view('offer', [
            'comment' => $comment
        ]);
    }
}
