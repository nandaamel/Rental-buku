<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Models\Register;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function indexUsers()
    {
        $data = User::get();

        return view('dashboard.user', compact('data'));
    
    }
    
    public function indexEditUsers($id){
        $data = user::where('id', $id)->first();
            return view ('dashboard.edit', compact('data'));
        }


        public function dashboard()
        {
            return view ('dashboard.index');
        }

        public function destroy($id)
        {
            User::Where('id', '=', $id)->delete();
            return redirect('/user');
        }

        public function update(Request $request, $id)
        {
            // $request->validate([
            //     'name' => 'required',
            //     'email' => 'required',
            //     'password' => 'required',
            //     'no_hp' => 'required',
            //     'address' => 'required',
            // ]);

            // User::findOrfail($id)->update($request->all());

            User::where('id','=',$id)->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'no_hp' => $request->no_hp,
                'address' => $request->address
            ]);
            
            return redirect('/user');
        }

        

    }