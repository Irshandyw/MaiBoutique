<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class ProfileEdit extends Controller
{
    public function edit()
{
   return view('Profile.edit-profile')->with('user', auth()->user());
}
    public function profileUpdate(Request $request){

        $request->validate([
            'name' => ['required', 'string', 'min:5', 'max:20'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone' =>['required','string','min:10','max:13'],
            'address' => ['required', 'string', 'min:5'],
        ]);
        $user = auth()-> user();
        $user ->update([
            'name'=> $request->name,
            'email'=> $request->email,
            'phone'=> $request->phone,
            'address'=> $request->address,
        ]);
        return back()->with("status", "Profile anda berhasil diubah!");
    }

}
