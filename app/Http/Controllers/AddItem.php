<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Http\Request;

class AddItem extends Controller
{
    public function view()
    {
        return view('Profile.add-item')->with('user', auth()->user());
    }
    public function additem(Request $request,Item $item)
    {

        $request->validate([
            'image' => ['required'],
            'name' => ['required', 'string', 'min:5', 'max:20'],
            'desc' => ['required', 'string',  'min:5'],
            'price' => ['required', 'int', 'min:1000'],
            'stock' => ['required', 'int', 'min:1'],
        ]);
        $user = Item::create(['name' =>$request->name,'image'=>$request->image,'price'=>$request->price,'stock'=>$request->stock,'desc'=>$request->desc]);

        return back()->with("status", "Kamu berhasil menambahkan barang!");
    }
}
