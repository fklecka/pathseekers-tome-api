<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $userId = $request->user()->id;
        $characters = Character::query()->where('user_id', $userId)->get();

        return $characters;
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
        $characterData = [
            'user_id' => $request->user()->id,
            'character' => $request->character,
        ];

        $character = new Character;

        $character->fill($characterData);
        
        if($character->save()){      
            return response(["success" => "Charakter wurde gespeichert"]);
        } else {
            return response(["error" => "Etwas ist schief gelaufen"]);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function edit(Character $character)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $characterData = [
            'user_id' => $request->user()->id,
            'character' => $request->character,
        ];

        $character = Character::findOrFail($id);

        if($request->user()->id == $character->user_id){
            $character->fill($characterData);
            $character->save();
            return response(["success" => "Charakter wurde gespeichert"]);
        } else {
            return response(["error" => "Etwas ist schief gelaufen"]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Character  $character
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $character = Character::findOrFail($id);

        $userId = $request->user()->id;;

        if($character->user_id == $userId){
            $character->delete();
            return response(['success' => 'Charakter wurde gelöscht']);
        } else {
            return response (['error' => 'Charakter konnte nicht gelöscht werden']);
        }

    }
}
