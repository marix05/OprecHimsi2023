<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserAuthController extends Controller
{
  public function login() {

    $data = [
      'title' => 'OPREC BPH HIMSI 2023',
      'nav' => [
        'active' => 'registration'
      ],
    ];

    return view('web/auth/login', $data);
  }

  public function storeLogin(Request $request) {

    $request->validate([
      'nim' => 'required|numeric',
      'password' => 'required',
    ]);

    if(Auth::attempt([
      "nim" => $request->nim, 
      "password" => $request->password,
    ])){
        $request->session()->regenerate();
        return redirect()->intended('/infohimsi')->with("success", "Login berhasil");
    };
    
    return back()->with("error", "Login gagal, nim atau password salah");
  }

  public function infoHimsi() {

    $data = [
      'title' => 'OPREC BPH HIMSI 2023',
      'nav' => [
        'active' => 'infoHimsi',
      ],
    ];

    return view('web/auth/infohimsi', $data);
  }
}
