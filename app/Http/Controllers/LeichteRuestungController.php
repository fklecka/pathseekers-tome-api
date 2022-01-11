<?php

namespace App\Http\Controllers;

use App\Models\LeichteRuestung;
use Illuminate\Http\Request;

class LeichteRuestungController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return LeichteRuestung::all();
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
     * @param  \App\Models\LeichteRuestung  $leichteRuestung
     * @return \Illuminate\Http\Response
     */
    public function show(LeichteRuestung $leichteRuestung)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\LeichteRuestung  $leichteRuestung
     * @return \Illuminate\Http\Response
     */
    public function edit(LeichteRuestung $leichteRuestung)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\LeichteRuestung  $leichteRuestung
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, LeichteRuestung $leichteRuestung)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\LeichteRuestung  $leichteRuestung
     * @return \Illuminate\Http\Response
     */
    public function destroy(LeichteRuestung $leichteRuestung)
    {
        //
    }
}
