<?php

namespace App\Http\Controllers;

use App\Models\Kriegswaffen;
use Illuminate\Http\Request;

class KriegswaffenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Kriegswaffen::all();
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
     * @param  \App\Models\Kriegswaffen  $kriegswaffen
     * @return \Illuminate\Http\Response
     */
    public function show(Kriegswaffen $kriegswaffen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kriegswaffen  $kriegswaffen
     * @return \Illuminate\Http\Response
     */
    public function edit(Kriegswaffen $kriegswaffen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Kriegswaffen  $kriegswaffen
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kriegswaffen $kriegswaffen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kriegswaffen  $kriegswaffen
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kriegswaffen $kriegswaffen)
    {
        //
    }
}
