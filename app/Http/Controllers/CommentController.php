<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Requests\CommentRequest;

class CommentController extends Controller
{
    public function store (Request $request) {
        Comment::create([
            'username' => $request->input('username'),
            'title' => $request->input('title'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'offer_id' => $request->input('offer_id')
        ]);
        return redirect()->route('home')->with('success', 'Thanks for your comment');
    }
    public function commentOffer($slug) 
    {   
        $comment = Comment::where('offer_id', $offers->id)->get();
        return view('offer', [
            'comment' => $comment
        ]);
    }
}
