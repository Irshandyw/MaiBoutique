<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class UpdatePassword extends Controller
{
    public function changePassword()
{
   return view('Profile.change-pass');
}

    public function updatePassword(Request $request)
{
        $request->validate([
            'old_password' => ['required'],
            'new_password' => ['required', 'string', 'min:5','max:20'],
        ]);

        if(!Hash::check($request->old_password, auth()->user()->password)){
            return back()->with("error", "Password lama anda salah harap masukan password lama yang benar !");
        }


        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        return back()->with("status", "Password berhasil diubah!");
}
}
