<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
  public function login() {

    $data = [
      'title' => 'OPREC BPH HIMSI 2023',
      'nav' => [
        'active' => 'admin'
      ],
    ];

    return view('admin/login', $data);
  }

  public function storeLogin(Request $request) {

    $request->validate([
      'username' => 'required',
      'password' => 'required',
    ]);

    if(Auth::guard('admin')->attempt([
      "username" => $request->username, 
      "password" => $request->password,
    ])){
        $request->session()->regenerate();
        return redirect()->route('adminDashboard')->with("success", "Login berhasil");
    };

    return back()->with("error", "Login gagal, username atau password salah");
  }

  public function logout(Request $request) {

    $request->session()->invalidate();
    $request->session()->regenerateToken();
    return redirect()->route("admin");
  }
}
