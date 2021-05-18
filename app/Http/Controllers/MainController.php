<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use Illuminate\Http\Request;


class MainController extends Controller
{
    public function home() 
    {
        return view('home');
    }
    public function offers() 
    {   
        $offers = Offer::all();
        
        return view('IndexOffer', [
            'IndexOffer' => $offers
        ]);
    }
    
    public function store (Request $request) {
        Offer::create([
            'title' => $request->input('title'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'region' => $request->input('region'),
            'ville' => $request->input('ville'),
        ]);
        return redirect()->route('offer.show');
    }

    public function create() {
            return view('create');
    }
}



