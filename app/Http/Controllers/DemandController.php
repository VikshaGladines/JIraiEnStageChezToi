<?php

namespace App\Http\Controllers;

use App\Models\demande;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use App\Http\Requests\DemandRequest;
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
        $validator = $request->validate([
            'title' => 'required|max:200',
            'email' => 'required|max:70',
            'content' => 'required|max:1300',
            'region' => 'required',
            'ville' => 'required',
            
        ]);
        if($validator == false) {
            return Redirect::back()->withErrors($validator);
        }
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


    public function delete(demande $demande) {
        $demande->delete();
        if (Auth::user()->role == 'ADMIN') {
        return redirect()->route('offer.show')->with('success', "L'offre a bien été supprimer !");
        }
        else {
            return redirect()->route('profile.show')->with('success', "L'offre a bien été supprimer !");
        }
    }

    
    public function edit(demande $demande) {
        if (Auth::user()->id == $demande->user_id || Auth::user()->role == 'ADMIN') {
        return view('editDemande',[
            'demande' => $demande
        ]);
        } 
        else {
            return abort(403, 'Unauthorized action.');
        }
    }

    public function update(DemandRequest $request, demande $demande)
    { 
        
        $validator = $request->validate([
            'title' => 'required|max:200',
            'email' => 'required|max:70',
            'content' => 'required|max:1300',
            'region' => 'required',
            'ville' => 'required',
            
        ]);
        if($validator == false) {
            return Redirect::back()->withErrors($validator);
        }
        
        $demande->email = $request->input('email');
        $demande->title = $request->input('title');
        $demande->content = $request->input('content');
        $demande->region = $request->input('region');
        $demande->ville = $request->input('ville');
        $demande->user_id = $request->input('user_id');
        $demande->save();
        if (Auth::user()->role == 'ADMIN') {
        return redirect()->route('offer.show');
        } else {
            return redirect()->route('profile.show')->with('success', "La demande a bien été supprimer !");
        }
    }


}
    