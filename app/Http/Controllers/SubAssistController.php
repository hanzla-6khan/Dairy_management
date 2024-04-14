<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use App\Models\SubAsset;
use Illuminate\Http\Request;

class SubAssistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {


        $assets = Asset::all();

          return view('customer.sub_assets', compact('assets'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request  $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'Assets_name_en' => 'required|string|max:255',
            'Assets_name_ur' => 'required|string|max:255',
            'asset_id' => 'required|integer',
        ]);


        $asset = new  SubAsset;
        $asset->Assets_name_en = $validated['Assets_name_en'];
        $asset->Assets_name_ur = $validated['Assets_name_ur'];
        $asset->asset_id = $validated['asset_id'];

        $asset->save();


        return back()->with('success', 'Asset created successfully.');
    }


}
