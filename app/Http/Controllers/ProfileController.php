<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function show(string $id)
    {
        $user = User::where('id',$id)->get();
        return view('profile.index',compact('user'));
    }
}
