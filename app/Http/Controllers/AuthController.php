<?php
   
namespace App\Http\Controllers;
   
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
   
class AuthController extends Controller
{

    /**
     * register
     *
     * @param  mixed $request
     * @return void
     */
    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'username' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        $request['password'] = Hash::make($request['password']);
        $request['remember_token'] = Str::random(10);
        $user = User::create($request->toArray());
        $token = $user->createToken('authToken');
        $response = ['token' => $token->plainTextToken];
        return response($response, 200);
    }
    
    /**
     * login
     *
     * @param  mixed $request
     * @return void
     */
    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|string|email|max:255',
            'password' => 'required|string|min:6',
        ]);
        if ($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $token = $user->createToken('authToken');
                $response = ['token' => $token->plainTextToken, 'message' => "Login erfolgreich"];
                if($request->remember == "true"){
                    $response['remember_token'] = $user->remember_token;
                }
                return response($response, 200);
            } else {
                $response = ["message" => "Falsche Login-Daten"];
                return response($response, 400);
            }
        } else {
            $response = ["message" => 'Falsche Login-Daten'];
            return response($response, 400);
        }
    }

    public function rememberLogin(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'remember_token' => 'required|string|max:60',
        ]);

        if($validator->fails()) {
            return response(['errors' => $validator->errors()->all()], 422);
        }

        $user = User::where('remember_token', $request->remember_token)->first();
        if ($user) {
                $token = $user->createToken('authToken');
                $response = ['token' => $token->plainTextToken];
                return response($response, 200);
        } 

    }
   
}