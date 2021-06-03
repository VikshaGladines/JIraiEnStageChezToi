<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Offer;
use App\Models\Comment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Requests\OfferRequest;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;


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
            'user_id' => $request->input('user_id'),
            'slug' => Str::slug($request->input('title'), "-")
        ]);
        return redirect()->route('home');
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
        return view('profile', [
            'profile' => $user,
            'offer' => $offers
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

    }

    public function show($slug) {
        $offer = Offer::where('slug', $slug)->firstOrFail();
        $comment = Comment::where('offer_id', $offer->id)->get();
        return view('offer', [
            'offer' => $offer,
            'comments' => $comment
        ]);
        return view('messenger.create', [
            'userss' => $offer
        ]);
        
    } 
    public function delete(Offer $offer) {
        $offer->delete();
        return redirect()->route('home')->with('success', "L'offre a bien été supprimer !");
    }

    public function edit(Offer $offer) {
        return view('edit',[
            'offer' => $offer
        ]);
    }
    public function update(OfferRequest $request, Offer $offer)
    {
       
        $offer->email = $request->input('email');
        $offer->title = $request->input('title');
        $offer->content = $request->input('content');
        $offer->region = $request->input('region');
        $offer->ville = $request->input('ville');
        $offer->save();
       
        return redirect()->route('offer.show');
    }
    public function AdminHome() {
        return view('AdminHome');
    }
}





