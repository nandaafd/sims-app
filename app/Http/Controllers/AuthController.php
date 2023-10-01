<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index(){
        
        if (Auth::check()) {
            return redirect('produk');
        }else{
            return view('auth.login');
        }
    }
    // public function login(Request $request){
    //     $data = [
    //         'email' => $request->input('email'),
    //         'password' => $request->input('password'),
    //     ];

    //     if (Auth::Attempt($data)) {
    //         return redirect('produk');
    //     }else{
    //         Session::flash('error', 'Email atau Password Salah');
    //         return redirect('/login');
    //     }
    // }
    public function login(Request $request){
        $request->session()->put('user',$request['email']);
        return redirect('/produk');
    }
    public function logout(Request $request){
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
