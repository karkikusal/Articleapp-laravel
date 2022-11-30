<?php

namespace App\Http\Controllers;

use App\Models\user;
use Illuminate\Http\Request;
use Illuminate\support\facades\Hash;
use Illuminate\support\facades\Auth;

class UserController extends Controller
{
    public function userRegister(Request $request){
        //dd($request->all());


            $request->validate([
                'name' => 'required',
                'email' => 'required|email',
                'password' => 'required',

            ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        return redirect()->route('login');
        }
    

        public function userlogin(Request $request)
        {
           // dd($request->all());
    
    
                $request->validate([
                    
                    'email' => 'required|email',
                    'password' => 'required',
    
                ]);
               
                if (Auth::attempt([
                    'email'=>$request->email,
                    'password'=>$request->password
                ])){
                     return redirect()->route('dashboard');
                    //dd('log in');
                }else{
                    return back()->with('fail', 'User Not found!');
                    //dd('use not found');
                }
        }
    public function logout() {
        auth()->logout();

        return redirect()->route('login');
    }
}