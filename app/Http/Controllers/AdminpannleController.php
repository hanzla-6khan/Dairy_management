<?php

namespace App\Http\Controllers;

use App\Models\Adminpannle;
use Illuminate\Http\Request;

class AdminpannleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('layouts.Admin-pannel.header');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Adminpannle $adminpannle)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Adminpannle $adminpannle)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Adminpannle $adminpannle)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Adminpannle $adminpannle)
    {
        //
    }
}
