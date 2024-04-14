<?php

namespace App\Http\Controllers;

use App\Models\Bilty;
use Illuminate\Http\Request;

class BiltyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $bilties = Bilty::all();
        // return view('bilty.bilties', compact('bilties'));


        return view('bilty.bilties');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('bilty.createBilty');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validatedData = $request->validate([
            'customer' => 'required|string|max:255',
            'item' => 'required|string|max:255',
            'track_no' => 'required|string|max:255',
            'track_read' => 'required|string|max:255',
            'factory' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'cost_per_package' => 'required|numeric|min:0',
            'total_cost' => 'required|numeric|min:0',
            'pre_balance' => 'required|numeric',
            'payment' => 'required|numeric|min:0',
            'now_balance' => 'required|numeric',
            'remarks' => 'nullable|string|max:1000',
            'sms_notification' => 'required|string'
        ]);
        Bilty::create($validatedData);
        return redirect()->route('bilties.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Bilty $bilty)
    {
        return view('bilty.show', compact('bilty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bilty $bilty)
    {
        return view('bilty.edit', compact('bilty'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Bilty $bilty)
    {
        $validatedData = $request->validate([
            'customer' => 'required|string|max:255',
            'item' => 'required|string|max:255',
            'track_no' => 'required|string|max:255',
            'track_read' => 'required|string|max:255',
            'factory' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'cost_per_package' => 'required|numeric|min:0',
            'total_cost' => 'required|numeric|min:0',
            'pre_balance' => 'required|numeric',
            'payment' => 'required|numeric|min:0',
            'now_balance' => 'required|numeric',
            'remarks' => 'nullable|string|max:1000',
            'sms_notification' => 'required|string'
        ]);

        $bilty->update($validatedData);
        return redirect()->route('bilties.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Bilty $bilty)
    {
        $bilty->delete();
        return redirect()->route('bilties.show');
    }
}
