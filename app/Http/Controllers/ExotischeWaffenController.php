<?php

namespace App\Http\Controllers;

use App\Models\ExotischeWaffen;
use Illuminate\Http\Request;

class ExotischeWaffenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ExotischeWaffen::all();
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
     * @param  \App\Models\ExotischeWaffen  $exotischeWaffen
     * @return \Illuminate\Http\Response
     */
    public function show(ExotischeWaffen $exotischeWaffen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ExotischeWaffen  $exotischeWaffen
     * @return \Illuminate\Http\Response
     */
    public function edit(ExotischeWaffen $exotischeWaffen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\ExotischeWaffen  $exotischeWaffen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExotischeWaffen $exotischeWaffen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ExotischeWaffen  $exotischeWaffen
     * @return \Illuminate\Http\Response
     */
    public function destroy(ExotischeWaffen $exotischeWaffen)
    {
        //
    }
}
