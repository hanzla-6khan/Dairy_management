<?php

namespace App\Http\Controllers;

use App\Models\Asset;
use Illuminate\Http\Request;

class AssetsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('customer.assets');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
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
            'Business_id' => 'required|integer',
        ]);


        $asset = new Asset;
        $asset->Assets_name_en = $validated['Assets_name_en'];
        $asset->Assets_name_ur = $validated['Assets_name_ur'];
        $asset->Business_id = $validated['Business_id'];

        $asset->save();


        return back()->with('success', 'Asset created successfully.');
    }

    /**
     * Display the specified resource.
     */


    /**
     * Show the form for editing the specified resource.
     */


    /**
     * Update the specified resource in storage.
     */


    /**
     * Remove the specified resource from storage.
     */
}
