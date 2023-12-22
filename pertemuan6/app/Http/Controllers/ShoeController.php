<?php

namespace App\Http\Controllers;

use App\Models\Shoe;
use Illuminate\Http\Request;

class ShoeController extends Controller
{
    function create() {
        return view('addProduct');
    }

    function create1(Request $request) {
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Size' => ['required'],
            'Color' => ['required'],
            'Photo' => ['required', 'image']
        ]);

        $filename = $request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::create([
            'Name' => $request->Name,
            'Price' =>$request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename
        ]);

        return redirect('/product');
    }

    function view() {
        $shoes = Shoe::all();
        return view('product', compact('shoes'));
    }
}
