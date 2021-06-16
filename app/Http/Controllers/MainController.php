<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offer;
use App\Models\Comment;
use App\Models\demande;
use App\Models\ImageOffer;
use App\Traits\ImageUpload;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


class MainController extends Controller
{
    use ImageUpload;

    public function home() 
    {
        $offers = Offer::latest()->take(3)->get();
        
        return view('home', [
            'lastoffer' => $offers,
            
        ]); 
    }

    public function offers() 
    {   
        $offers = Offer::all();
        $demandes = demande::all();
        return view('IndexOffer', [
            'IndexOffer' => $offers,
            'demande' => $demandes
        ]);
    }
    
    public function store (Request $request) {
        $validator = $request->validate([
            'title' => 'required|max:200',
            'email' => 'required',
            'content' => 'required|max:1300',
            'region' => 'required',
            'ville' => 'required|max:150',
        ]);
        if($validator == false) {
            return Redirect::back()->withErrors($validator);
        }
        
        else {
        Offer::create([
            'title' => $request->input('title'),
            'email' => $request->input('email'),
            'content' => $request->input('content'),
            'region' => $request->input('region'),
            'ville' => $request->input('ville'),
            'user_id' => $request->input('user_id'),
            'slug' => Str::slug($request->input('title'), "-"),

        ]);
        return redirect()->route('home');
       

    }
}


    public function create() {
        $user = Auth::user();
        $users = $user->id;    

        return view('create', [
                'test' => $users
            ]);
    }

    public function profile() 
    {   
        $user = Auth::user();
        $offers = Offer::where('user_id', $user->id)->get();
        $demande = demande::where('user_id', $user->id)->get();
        return view('profile', [
            'profile' => $user,
            'offer' => $offers,
            'demandes' => $demande
        ]);
        return view('messenger.create', [
            'user_id' => $user
        ]);
        return view('incs.navbar', [
            'users' => $user
        ]);

    }

    public function profilestore(Request $request)
    {
        if($request->hasFile('avatar')){
    		$avatar = $request->file('avatar');
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		Image::make($avatar)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );

    		$user = Auth::user();
    		$user->avatar = $filename;
    		$user->save();
    	}
        return redirect()->route('profile.show')->with('success', "L'image à bien été modifié");

    }


    public function show($slug) {
      
        $offer = Offer::where('slug', $slug)->firstOrFail();
        $comment = Comment::where('offer_id', $offer->id)->get();
        $image = ImageOffer::where('offer_id', $offer->id)->get();
        
        return view('offer', [
            'offer' => $offer,
            'comments' => $comment,
            'image' => $image
        ]);
    
        return view('messenger.create', [
            'userss' => $offer
        ]);
    }  
    

    public function delete(Offer $offer) {
        $offer->delete();
        if (Auth::user()->role == 'ADMIN') {
        return redirect()->route('offer.show')->with('success', "L'offre a bien été supprimer !");
        }
        else {
            return redirect()->route('profile.show')->with('success', "L'offre a bien été supprimer !");
        }
    }

    public function edit(Offer $offer) {
        if (Auth::user()->id == $offer->user_id || Auth::user()->role == 'ADMIN') {
        return view('edit',[
            'offer' => $offer
        ]);
    } else {
        return abort(403, 'Unauthorized action.');
    }
    }
    public function update(OfferRequest $request, Offer $offer)
    {
        dd($offer);
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
        $offer->email = $request->input('email');
        $offer->title = $request->input('title');
        $offer->content = $request->input('content');
        $offer->region = $request->input('region');
        $offer->ville = $request->input('ville');
        $offer->save();
        if (Auth::user()->role == 'ADMIN') {
        return redirect()->route('offer.show');
        } else {
            return redirect()->route('profile.show')->with('success', "L'offre a bien été supprimer !");
        }
    }
    
    public function AdminHome() {
        $offers = Offer::latest()->take(3)->get();
        return view('AdminHome', [
            'lastoffer' => $offers
        ]);
    }
}





