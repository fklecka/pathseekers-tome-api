<?php

namespace App\Http\Controllers;

use App\Models\Zauber;
use Illuminate\Http\Request;

class ZauberController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Zauber::all();
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
     * @param  \App\Models\Zauber  $zauber
     * @return \Illuminate\Http\Response
     */
    public function show(Zauber $zauber)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Zauber  $zauber
     * @return \Illuminate\Http\Response
     */
    public function edit(Zauber $zauber)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Zauber  $zauber
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Zauber $zauber)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Zauber  $zauber
     * @return \Illuminate\Http\Response
     */
    public function destroy(Zauber $zauber)
    {
        //
    }
}
