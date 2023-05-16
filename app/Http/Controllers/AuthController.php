<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{

   
    public function indexRegister(){
        return view('auth.register');
    }

    public function indexlogin(){
        return view('auth.login');
    }

    public function auth(Request $request) {
        $p=$request->validate([
            'name'=>'required',
            'password'=>'required',
        ]);

        if(Auth::attempt($p)) {
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->role_id == 1){
                return redirect('/user');
            }
            return redirect('/adminuser');
        }
       
    }


    public function storeRegist(Request $request) {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'no_hp' => 'required',                                   
            'address' => 'required',                                   
        ]);

        user::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            'role_id' => 2,
        ]);
        return redirect('/index-login');
    }

    public function logout()
    {
        auth()->logout();
        Session()->flush();
        return redirect('/')->with('dangerlog' , 'Berhasil logout');
    }
}
