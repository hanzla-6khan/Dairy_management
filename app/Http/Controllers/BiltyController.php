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
        // return view('bilty.createBilty');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        // dd($request->all());
        $validatedData = $request->validate(['customer' => 'required|string|max:255',
            'customer' => 'required|string|max:255',
            'item' => 'required|string|max:255',
            'track_no' => 'required|string|max:255',
            'track_read' => 'required|string|max:255',
            'factory' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'costPackage' => 'required|numeric|min:0', // changed from cost_per_package
            'totalCost' => 'required|numeric|min:0', // changed from total_cost
            'preBalance' => 'required|numeric', // changed from pre_balance
            'payment' => 'required|numeric|min:0',
            'now_balance' => 'required|numeric', // changed from now_balance
            'remarks' => 'nullable|string|max:1000',
            'sms_notification' => 'required|string'
        ]);
        $bilty  = Bilty::create($request->except('_token'));
        return redirect()->route('bilties.show')->with('success', 'Bilty created successfully');





    }

    /**
     * Display the specified resource.
     */
    public function show(Bilty $bilty)
    {
        $bilty = Bilty::all();
        return view('bilty.bilty_list', compact('bilty'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Bilty $bilty ,$id)
    {


        $bilty = Bilty::findOrFail($id);
        // $data = Bilty::all();
        return view('bilty.edit', compact('bilty'));


    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'customer' => 'required|string|max:255',
            'item' => 'required|string|max:255',
            'track_no' => 'required|string|max:255',
            'track_read' => 'required|string|max:255',
            'factory' => 'required|string|max:255',
            'quantity' => 'required|integer',
            'costPackage' => 'required|numeric',
            'totalCost' => 'required|numeric',
            'preBalance' => 'required|numeric',
            'payment' => 'required|numeric',
            'now_balance' => 'required|numeric',
            'remarks' => 'nullable|string',
            'sms_notification' => 'required|string'
        ]);

        try {
            $bilty = Bilty::findOrFail($id);
            $bilty->update([
                'customer' => $validated['customer'],
                'item' => $validated['item'],
                'track_no' => $validated['track_no'],
                'track_read' => $validated['track_read'],
                'factory' => $validated['factory'],
                'quantity' => $validated['quantity'],
                'cost_per_package' => $validated['costPackage'],
                'total_cost' => $validated['totalCost'],
                'pre_balance' => $validated['preBalance'],
                'payment' => $validated['payment'],
                'now_balance' => $validated['now_balance'],
                'remarks' => $validated['remarks'],
                'sms_notification' => $validated['sms_notification'],
            ]);

            return redirect()->route('bilties.show')->with('success', 'Bilty updated successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'Error updating Bilty: ' . $e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        try {
            $bilty = Bilty::findOrFail($id);
            $bilty->delete();
            return redirect()->route('bilties.show')->with('success', 'Bilty deleted successfully');
        } catch (\Exception $e) {
            return back()->with('error', 'Error deleting Bilty: ' . $e->getMessage());
        }
    }

}
