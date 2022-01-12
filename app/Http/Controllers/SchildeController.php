<?php

namespace App\Http\Controllers;

use App\Models\Schilde;
use Illuminate\Http\Request;

class SchildeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Schilde::all();
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
     * @param  \App\Models\Schilde  $schilde
     * @return \Illuminate\Http\Response
     */
    public function show(Schilde $schilde)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Schilde  $schilde
     * @return \Illuminate\Http\Response
     */
    public function edit(Schilde $schilde)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Schilde  $schilde
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Schilde $schilde)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Schilde  $schilde
     * @return \Illuminate\Http\Response
     */
    public function destroy(Schilde $schilde)
    {
        //
    }
}
