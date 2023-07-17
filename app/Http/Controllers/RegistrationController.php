<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Provinces;
use App\Models\Regencies;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class RegistrationController extends Controller
{
  public function index() {
    if (Session::get('nim')) {
      return redirect()->route('formRegist')->with('success', 'Silahkan isi data anda');
    }

    $data = [
      'title' => 'REGISTRATION BPH HIMSI 2023',
      'nav' => [
        'active' => 'registration'
      ],
    ];

    return view('web/registration/validateNIM', $data);
  }

  public function validateNIM(Request $request) {

    $request->validate([
      'nim' => 'required|numeric',
    ]);

    if (User::isRegistered($request->nim)) {
      Session::forget('nim');
      $request->session()->regenerate();
      return redirect()->route('login')->with('error', 'NIM yang anda masukkan telah terdaftar, silahkan login');
    }

    if (Mahasiswa::isNIMValid($request->nim)) {
      Session::put('nim', $request->nim);
      $request->session()->regenerate();
      return redirect()->route('formRegist')->with('success', 'NIM teridentifikasi, silahkan isi data anda');
    }

    return back()->with('error', 'NIM yang anda masukkan tidak sesuai');
  }

  public function form() {

    $mhs = Mahasiswa::isNIMValid(Session::get('nim'));
    $provinces = Provinces::all();

    if (User::isRegistered(Session::get('nim'))) {
      Session::forget('nim');
      return redirect()->route('login')->with('error', 'NIM yang anda masukkan telah terdaftar, silahkan login');
    }

    if ($mhs) {
      $data = [
        'title' => 'REGISTRATION BPH HIMSI 2023',
        'nav' => [
          'active' => 'registration'
        ],
        'mhs' => [
          'nim' => $mhs['nim'],
          'nama' => $mhs['nama'],
          'akt' => $mhs['akt'],
        ],
        'provinces' => $provinces,
      ];

      return view('web/registration/formRegist', $data);
    }

    return redirect()->route('validateNIM')->with('error', 'Masukkan NIM anda terlebih dahulu');
  }

  public function getKota($province_id) {

    $regencies = Regencies::where('province_id', $province_id)->get();

    foreach($regencies as $r) {
      echo "<option value='$r->name'>$r->name</option>";
    }
  }

  public function storeForm(Request $request) {

    $request->validate([
      'nim' => ['required', 'numeric', 'unique:users'],
      'nama' => ['required', 'string'],
      'tgl_lahir' => ['required'],
      'prodi' => ['required', 'string'],
      'kelas' => ['required', 'string'],
      'provinsi' => ['required', 'string'],
      'kota' => ['required', 'string'],
      'pil1' => ['required', 'string'],
      'alasan1' => ['required', 'string'],
      'pil2' => ['required', 'string'],
      'alasan2' => ['required', 'string'],
      'tentang' => ['required', 'string'],
      'wawancara' => ['required', 'string'],
      'idline' => ['required', 'string'],
      'instagram' => ['required', 'string'],
      'foto' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
      'khs' => ['required', 'file', 'max:10000'],
      'bukti_ss' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
      'password' => ['required'],
    ]);

    if ($request->file('khs') && $request->file('foto') && $request->file('bukti_ss')) {
      $foto = $request->file('foto');
      $fileFoto = date('YmdHi').".".$foto->getClientOriginalName();
      $foto->move(public_path('foto'), $fileFoto);

      $khs = $request->file('khs');
      $fileKHS = date('YmdHi').".".$khs->getClientOriginalName();
      $khs->move(public_path('khs'), $fileKHS);

      $buktiSS = $request->file('bukti_ss');
      $fileBuktiSS = date('YmdHi').".".$buktiSS->getClientOriginalName();
      $buktiSS->move(public_path('bukti_ss'), $fileBuktiSS);

      $user = new User([
        'nim' => $request->nim,
        'nama' => $request->nama,
        'tgl_lahir' => $request->tgl_lahir,
        'prodi' => $request->prodi,
        'kelas' => $request->kelas,
        'domisili' => (explode(',', $request->provinsi))[1].', '.$request->kota,
        'pil1' => $request->pil1,
        'alasan1' => $request->alasan1,
        'pil2' => $request->pil2,
        'alasan2' => $request->alasan2,
        'tentang' => $request->tentang,
        'wawancara' => $request->wawancara,
        'idline' => $request->idline,
        'instagram' => $request->instagram,
        'foto' => $fileFoto,
        'khs' => $fileKHS,
        'bukti_ss' => $fileBuktiSS,
        'password' => Hash::make($request->password),
      ]);

      $user->save();

      if(Auth::attempt([
        "nim" => $request->nim,
        "password" => $request->password,
      ])){
        $request->session()->regenerate();
        return redirect()->intended('/infohimsi')->with("success", "Registrasi berhasil, silahkan baca informasi yang tersedia");
      };
    }

    return back()->with('error', 'Registrasi gagal, coba lagi dan pastikan semua data anda benar');
  }
}
