<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function loginView(){
        return view('user.login');
    }
    public function registerView(){
        return view('user.register');
    }
    public function loginProcess(Request $request){
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/');
        }
 
        return back()->with('loginError', 'Login Failed!');
    }

    public function registerProcess(Request $request){
        $request->validate([
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
        
        //$request->Session::flash('success', 'Registration succesfull! Please Login!');
        return redirect('/login');
        
    }

    public function logoutProcess(Request $request){
        Auth::logout();
 
    $request->session()->invalidate();
 
    $request->session()->regenerateToken();
 
    return redirect('/');
    }
}
