<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
  public function dashboard() {

    $divisi = Auth::user()->divisi;

    $Semua = User::get();

    $Bistra = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%Bistra%')
                ->orWhere('pil2', 'LIKE', '%Bistra%');
              })->get();
    $Humas = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%Humas%')
                ->orWhere('pil2', 'LIKE', '%Humas%');
              })->get();
    $Mulmed = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%Mulmed%')
                ->orWhere('pil2', 'LIKE', '%Mulmed%');
              })->get();
    $Kastrad = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%Kastrad%')
                ->orWhere('pil2', 'LIKE', '%Kastrad%');
              })->get();
    $Kestari = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%Kestari%')
                ->orWhere('pil2', 'LIKE', '%Kestari%');
              })->get();
    $Seni = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%Seni%')
                ->orWhere('pil2', 'LIKE', '%Seni%');
              })->get();
    $Olahraga = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%Olahraga%')
                ->orWhere('pil2', 'LIKE', '%Olahraga%');
              })->get();
    $PSDM = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%PSDM%')
                ->orWhere('pil2', 'LIKE', '%PSDM%');
              })->get();
    $Akademik = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%Akademik%')
                ->orWhere('pil2', 'LIKE', '%Akademik%');
              })->get();
    $PTI = User::where(function ($query) {
                $query->where('pil1', 'LIKE', '%PTI%')
                ->orWhere('pil2', 'LIKE', '%PTI%');
              })->get();

    $data = [
      'title' => "Admin Dashboard ".$divisi." BPH HIMSI 2023",
      'nav' => [
        'active' => 'dashboard',
      ],
      'divisi' => [
        'Semua' => $Semua,
        'Bistra' => $Bistra,
        'Humas' => $Humas,
        'Mulmed' => $Mulmed,
        'Kastrad' => $Kastrad,
        'Kestari' => $Kestari,
        'Seni' => $Seni,
        'Olahraga' => $Olahraga,
        'PSDM' => $PSDM,
        'Akademik' => $Akademik,
        'PTI' => $PTI,
      ],
    ];

    return view('admin/dashboard', $data);
  }

  public function profil($id) {

    if (Auth::user()->divisi !== 'Admin') {
      return redirect()->route('adminDashboard')->with('error', 'Anda tidak memiliki akses laman tersebut');
    }

    $user = User::where('id', $id)->first();

    $data = [
      'title' => "Profile Pendaftar BPH HIMSI 2023",
      'nav' => [
        'active' => 'dashboard',
      ],
      'user' => $user,
    ];

    return view('admin/profil', $data);
  }

  public function recruit() {

    if (Auth::user()->divisi !== 'Admin') {
      return redirect()->route('adminDashboard')->with('error', 'Anda tidak memiliki akses laman tersebut');
    }

    $Semua = User::get();

    $data = [
      'title' => "Profile Pendaftar BPH HIMSI 2023",
      'nav' => [
        'active' => 'dashboard',
      ],
      'divisi' => [
        'Semua' => $Semua,
      ],
    ];

    return view('admin/recruit', $data);
  }

  public function storeRecruit(Request $request) {

    if (Auth::user()->divisi !== 'Admin') {
      return redirect()->route('adminDashboard')->with('error', 'Anda tidak memiliki akses laman tersebut');
    }

    $request->validate([
      'id' => 'required',
      'lulus' => 'required|string',
    ]);

    $user = User::where('id', $request->id)->first();

    if ($user) {
      $user->update([
        'lulus' => $request->lulus,
      ]);

      $request->session()->regenerate();
      return redirect()->route('recruit')->with("success", "Berhasil merekrut Staff");
    }

    return back()->with('error', 'Gagal merekrut Staff, coba lagi');
  }

  public function forgotPassword() {

    if (Auth::user()->divisi !== 'Admin') {
      return redirect()->route('adminDashboard')->with('error', 'Anda tidak memiliki akses laman tersebut');
    }

    $Semua = User::get();

    $data = [
      'title' => "Profile Pendaftar BPH HIMSI 2023",
      'nav' => [
        'active' => 'dashboard',
      ],
      'divisi' => [
        'Semua' => $Semua,
      ],
    ];

    return view('admin/forgotPassword', $data);
  }

  public function storeForgotPassword(Request $request) {

    if (Auth::user()->divisi !== 'Admin') {
      return redirect()->route('adminDashboard')->with('error', 'Anda tidak memiliki akses laman tersebut');
    }

    $request->validate([
      'id' => 'required',
      'password' => 'required',
    ]);

    $user = User::where('id', $request->id)->first();

    if ($user) {
      $user->update([
        'password' => Hash::make($request->password),
      ]);

      $request->session()->regenerate();
      return redirect()->route('forgotPassword')->with("success", "Berhasil memperbaharui password pendaftar");
    }

    return back()->with('error', 'Gagal memperbaharui password, coba lagi');
  }
}
