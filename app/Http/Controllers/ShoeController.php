<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Shoe;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ShoeController extends Controller
{
    function create() {
        $categories = Category::all();
        return view('addProduct', compact('categories'));
    }

    function create1(Request $request) {
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Size' => ['required'],
            'Color' => ['required'],
            'Photo' => ['required', 'image'],
            'CategoryId' => ['required']
        ]);

        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::create([
            'Name' => $request->Name,
            'Price' =>$request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename,
            'CategoryId' => $request->CategoryId
        ]);

        return redirect('/product');
    }

    function view() {
        $shoes = Shoe::all();
        $categories = Category::all();
        return view('product', compact('shoes', 'categories'));
    }

    function edit($id) {
        $shoe = Shoe::findOrFail($id);
        $categories = Category::all();
        return view('edit', compact('shoe', 'categories'));
    }

    function update($id, Request $request) {
        $request->validate([
            'Name' => ['required'],
            'Price' => ['required'],
            'Size' => ['required'],
            'Color' => ['required'],
            'Photo' => ['required', 'image'],
            'CategoryId' => ['required']
        ]);

        Storage::delete('/public'.'/'.Shoe::find($id)->Photo);
        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::find($id)->update([
            'Name' => $request->Name,
            'Price' =>$request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename,
            'CategoryId' => $request->CategoryId
        ]);

        return redirect('/product');
    }

    function delete($id) {
        $shoe = Shoe::find($id);
        Shoe::destroy($id);
        Storage::delete('/public'.'/'.$shoe->Photo);
        return redirect('/product');
    }

    function createShoeApi(Request $request) {
        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::create([
            'Name' => $request->Name,
            'Price' =>$request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename,
            'CategoryId' => $request->CategoryId
        ]);

        return 'Shoe has been added';
    }

    function shoeDataApi() {
        $shoes = Shoe::all();
        return $shoes;
    }

    function updateShoeApi(Request $request, $id) {
        Storage::delete('/public'.'/'.Shoe::find($id)->Photo);
        $now = now()->format('Y-m-d_H.i.s');
        $filename = $now.'_'.$request->file('Photo')->getClientOriginalName();
        $request->file('Photo')->storeAs('/public'.'/'.$filename);

        Shoe::find($id)->update([
            'Name' => $request->Name,
            'Price' =>$request->Price,
            'Size' => $request->Size,
            'Color' => $request->Color,
            'Photo' => $filename,
            'CategoryId' => $request->CategoryId
        ]);

        return 'Shoe has been updated';
    }

    function deleteShoeApi($id) {
        $shoe = Shoe::find($id);
        Shoe::destroy($id);
        Storage::delete('/public'.'/'.$shoe->Photo);
        return 'Shoe has been deleted';
    }
}
