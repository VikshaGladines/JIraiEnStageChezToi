<?php

namespace App\Http\Controllers;

use App\Models\demande;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandController extends Controller
{
    public function demandes() {
        $demandes = demande::all();

        return view('demande', [
            'demande' => $demandes,
        ]);
    }

    public function store (Request $request) {
        demande::create([
            'title' => $request->input('title'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'region' => $request->input('region'),
            'ville' => $request->input('ville'),
            'user_id' => $request->input('user_id'),
        ]);
        return redirect()->route('home');
    }

    public function create() {
        $user = Auth::user();
        $users = $user->id;    

        return view('createDemande', [
                'createdemande' => $users
            ]);
    }
}
