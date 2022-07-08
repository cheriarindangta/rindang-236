<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function _construct(){
        $this->middleware('jwt.verify', ['except' => ['login', 'register']]);   
    }

    public function login(){
        $credentials = request(['username', 'password']);
        if (!$token = auth('api')->attempt($credentials)) {
            return response()->json(['error' => 'Unauthorized'], 401); 
        } 
        return $this->respondWithToken($token); 
        
    }

    public function me(){
        return response()->json(auth('api')->user()); 
    }

    public function logout(){
        auth('api')->logout();
        return response()->json(['message'=>'Successfully logged out!']);
    }
   // public function refresh(){
   //     return $this->respondWithToken(auth()->refresh()); 
   // }

    protected function respondWithToken($token){
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            //'expires in' => auth()->factory()->getTTL() 
        ]);
    }

    public function register(Request $request){
            $validator = Validator::make($request->all(),[
                //     'name'=>'required|string|max:255',
                //     'email' => 'required|string|email|max:255|unique:users',
                //     'password' => 'required|string|min:6|confirmed',
                'name' => ['required'],
                    'address' => ['required'],
                    'email' => ['required'],
                    'telp' => ['required'],
                    'username' => ['required'],
                    'password' => ['required'],
                ]);
    
            $user = User::create([
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]);
    
            Customer::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'address' => $request->address,
                'email' => $request->email,
                'telp' => $request->telp,
            ]);   
    
            
            if($validator->fails()){
                return response()->json([
                    'status' => 'error',
                    'success' => false,
                    'error' =>
                    $validator->errors()->toArray() 
                ], 400); 
            }
            // $user = User::create([
            //     'name'=>$request->input('name'),
            //     'email'=>$request->input('email'),
            //     'password'=>Hash::make($request->input('password')),  
            // ]);
    
            return response()->json([
                'message' => 'User has been created!',
                'user' => $user
            ]);
           
    }
}
