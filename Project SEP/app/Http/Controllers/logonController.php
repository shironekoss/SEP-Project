<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class logonController extends Controller
{
    public function cekLogin(Request $request)
    {
        // dd($request->all());

        $request->validate([
            'username' => 'required|alpha_num',
            'password' => 'required'
        ]);

        return redirect('selenium/login')->with('error', 'Email and Password tidak terdaftar');
    }
}
