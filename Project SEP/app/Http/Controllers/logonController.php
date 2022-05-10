<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class logonController extends Controller
{
    public function cekLogin(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'username' => 'required|alpha_num',
            'password' => 'required'
        ]);

        $credential = [
            //yg orange yg database , yang biru yg dari form
            "akun_user"  => $request->username,
            "password"  => $request->password
        ];
        // dump($credential);

        $cekcustomer = Auth::attempt($credential);
        // dd($cekcustomer);
        if($cekcustomer){
            return redirect('selenium/menu');
        }
        else{
            return redirect('selenium/login')->with('pesan', 'Akun User atau Password salah!');
        }

    }

    public function login(Request $request)
    {
        return view('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('selenium');
    }
}
