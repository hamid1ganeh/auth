<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request){
        $loginUserData = $request->validate([
            'mobile'=>'required|string|min:11|max:11',
            'password'=>'required|min:5'
        ]);
        $user = User::where('mobile',$loginUserData['mobile'])->first();
        if(!$user || !Hash::check($loginUserData['password'],$user->password)){
            return response()->json([
                'message' => 'Invalid Credentials'
            ],401);
        }
        $token = $user->createToken($user->fullname.'-AuthToken')->plainTextToken;
        return response()->json([
            'access_token' => $token,
        ]);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return response()->json([
            "data"=>['message'=>"Logged out"],
            "server_time"=>Carbon::now()
        ]);
    }

    public function user(){
         $user = auth()->user();
         return response()->json([
             "user" => $user]);
    }
}
