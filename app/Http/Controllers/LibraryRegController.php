<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;

class LibraryRegController extends Controller
{
    public function store(Request $request)
    {
        
        $data=$request->validate([
            'name'=>'required',
            'email'=>['required', 'string','unique:users'],
            'password'=>'required',
            'password_confirmation'=>'in:'.$request['password_confirmation'],
            'phone_number' => ['required', 'string'],
        ]);

        User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'user_type' => $request['user_type'],
            'phone_number' => $data['phone_number'],
        ]);

        return redirect('/');
    }

    public function create(){
        return view('auth.library_register');
    }
}
