<?php

namespace App\Http\Controllers;

use App\Models\EinfacheWaffen;
use Illuminate\Http\Request;

class EinfacheWaffenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return EinfacheWaffen::all();
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
     * @param  \App\Models\EinfacheWaffen  $einfacheWaffen
     * @return \Illuminate\Http\Response
     */
    public function show(EinfacheWaffen $einfacheWaffen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EinfacheWaffen  $einfacheWaffen
     * @return \Illuminate\Http\Response
     */
    public function edit(EinfacheWaffen $einfacheWaffen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\EinfacheWaffen  $einfacheWaffen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, EinfacheWaffen $einfacheWaffen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EinfacheWaffen  $einfacheWaffen
     * @return \Illuminate\Http\Response
     */
    public function destroy(EinfacheWaffen $einfacheWaffen)
    {
        //
    }
}
