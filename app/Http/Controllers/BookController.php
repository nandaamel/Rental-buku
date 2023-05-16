<?php

namespace App\Http\Controllers;
use App\Models\Books;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function book(){
        $book = Books::all();
        return view('dashboard.book', compact('book'));
    }

    public function destroy($item)
    {
        Books::where('id',$item)->delete();
        return redirect('/book');
    }

    public function form(){
        return view ('dashboard.form');
    }

    public function add (Request $request){
        $request->validate([
            'title' => 'required',
            'writer' => 'required',
            'publisher' => 'required',
            'synopsis' => 'required',
            'image' => 'required|image|mimes:png,jpg,jpeg,|max:2048',
        ]);

        $image = time().'.'.$request->image->extension();
        $request->image->move(public_path('images'), $image);

        Books::create([
            'title'=> $request->title,
            'writer'=> $request->writer,
            'publisher'=> $request->publisher,
            'synopsis'=> $request->synopsis,
            'image'=> $image,
        ]);
       
        return redirect(route('book'));
    }
}