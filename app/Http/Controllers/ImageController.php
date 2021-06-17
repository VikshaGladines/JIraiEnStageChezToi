<?php

namespace App\Http\Controllers;


use App\Models\ImageOffer;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Redirect;

class ImageController extends Controller
{

   
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'image' =>  'required|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);
        
        if($request->hasFile('image')){
    		$image = $request->file('image');
    		$filename = time() . '.' . $image->getClientOriginalExtension();
            
    		Image::make($image)->resize(400, 250)->save( public_path('/uploads/avatars/' . $filename ) );

            $image = $filename;
    		$images = ImageOffer::create([
                'image' => $image,
                'offer_id' => $request->input('offer_id')
            ]);
           
    		
        }
        return Redirect::back();
       
    
}

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(ImageOffer $image)
    {
        $image->delete();
        return Redirect::back();
    }
}
