<?php

namespace App\Http\Controllers;

use App\Models\Pesan;

use Illuminate\Http\Request;

class PesanController extends Controller
{
    public function storePesan(Request $request){
        $request->validate([
            'name' => 'required',
            'message' => 'required',
        ]);

        Pesan::create($request->all());
        return redirect('/');
    }
}
