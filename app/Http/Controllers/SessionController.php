<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Has;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function index() {
        return view ('sesi/index');
    }
    public function login (Request $request) {
        Session::flash('email',$request->email);


        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);
        [
            'email'=>'Email Wajib Diisi!',
            'Password'=>'Password Wajib Diisi!',
        ];

        $infologin = [
            'email' => $request->email,
            'password' => $request->password
        ];
        if (Auth::attempt($infologin)) {
            return redirect('departemen')->with('succes', 'Berhasil Login');
        } else {
            return redirect('sesi')->with('succes', 'Username dan Password Yang Anda Masukkan Tidak Valid!');
        }
    }
    
    public function logout (){
        Auth::logout();
        return redirect('sesi')->with('succes', 'Berhasil Logout');
    }
}
