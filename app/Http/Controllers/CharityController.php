<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCharityRequest;
use App\Http\Requests\UpdateCharityRequest;
use App\Models\Charity;

class CharityController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('home');
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
    public function store(StoreCharityRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Charity $charity)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Charity $charity)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharityRequest $request, Charity $charity)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Charity $charity)
    {
        //
    }
}
