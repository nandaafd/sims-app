<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
    {
        return view('auth.register');
    }
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'nama'=>'required',
            'posisi'=>'required',
            'email'=>'required|unique:user,email',
            'password'=>'required|min:8'
        ]);
        $password = $request->password;
        $user = new User;
        $user->nama = $request->nama;
        $user->posisi = $request->posisi;
        $user->email = $request->email;
        $user->password = bcrypt($password);
        $user->save();
        return redirect('login')->with('success','Berhasil terdaftar silahkan masuk');
    }

}
