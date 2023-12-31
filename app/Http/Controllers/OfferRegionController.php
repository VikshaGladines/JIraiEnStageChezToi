<?php

namespace App\Http\Controllers;

use App\Models\Offer;
use App\Models\Region;
use App\Models\demande;
use Illuminate\Http\Request;

class OfferRegionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($region)
    {   
        $regions = demande::where('region', $region)->get();
        $region = Offer::where('region', $region)->get();
        $null = false;
        if ($region->isEmpty()) {
            return view('offerRegion', [
                'rien' => $null,
                'offerRegion' => $region,
                'demandRegion' => $regions
            ]);
        }
        else {
            $null = true;
        return view('offerRegion', [
                'offerRegion' => $region,
                'demandRegion' => $regions,
                'rien' => $null
                
            ]);
        }
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
        //
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
    public function destroy($id)
    {
        //
    }
}
