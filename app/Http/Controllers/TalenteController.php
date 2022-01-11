<?php

namespace App\Http\Controllers;

use App\Models\Talente;
use Illuminate\Http\Request;

class TalenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Talente::all();
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
     * @param  \App\Models\Talente  $talente
     * @return \Illuminate\Http\Response
     */
    public function show(Talente $talente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talente  $talente
     * @return \Illuminate\Http\Response
     */
    public function edit(Talente $talente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talente  $talente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talente $talente)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talente  $talente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talente $talente)
    {
        //
    }
}
