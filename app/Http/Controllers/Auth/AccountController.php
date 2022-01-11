<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class AccountController extends Controller {


    public function editAccount($id, Request $request)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'username' => [ 'string', 'max:255', 'unique:users', 'alpha_dash', 'nullable'],
            'email' => [ 'string', 'email', 'max:255', 'unique:users', 'confirmed', 'nullable'],
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => $validator->errors()
            ]);
        }else {
            if($request['email'] === null){
                $user->fill($request->only([
                    'username' => 'username'
                ]));
            }else if ($request['username'] === null){
                $user->fill($request->only([
                    'email' => 'email',
                ]));
            } else {
                $user->fill($request->only([
                    'email' => 'email',
                    'username' => 'username'
                ]));
            }

            $user->save();

            return response()->json([
                'success' => "Profil gespeichert"
            ]);
        }
    }

    public function changeAbo($id, Request $request)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'abo' => ['string', 'required', 'max:15']
        ]);

        if($validator->fails()){
            return response()->json([
                'errors' => 'Nice try'
            ]);
        } else {
            $user->fill($request->only([
                'abo' => 'abo'
            ]));
    
            $user->save();

            return response()->json([
                'success' => "Abonnement gewechselt"
            ]);
        };
    }

    public function deleteAccount(Request $request) {

        $userId = $request->user()->id;

        $user = User::findOrFail($userId);

        $user->delete();

        return response(["success" => "Account wurde gelöscht"]);
    }
}