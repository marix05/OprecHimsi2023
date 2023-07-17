<?php

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserAuthController;
use App\Http\Controllers\AdminAuthController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RegistrationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('guest')->group(function () {
  Route::get('/', function () {
    return view('web/index', [
      'title' => 'OPREC BPH HIMSI 2023',
      'nav' => [
      'active' => 'index',
      ]
    ]);
  })->name('index');
  
  Route::get('/faq', function () {
    return view('web/faq', [
        'title' => 'FAQ OPREC BPH HIMSI 2023',
        'nav' => [
          'active' => 'registration',
        ],
      ]);
  })->name('faq');

  Route::get('/login', [UserAuthController::class, 'login'])->name('login');
  Route::post('/login', [UserAuthController::class, 'storeLogin']);

  Route::get('/registration', [RegistrationController::class, 'index'])->name('validateNIM');
  Route::post('/registration', [RegistrationController::class, 'validateNIM']);

  Route::get('/getkota/{province_id}', [RegistrationController::class, 'getKota']);
  
  Route::get('/registration/form', [RegistrationController::class, 'form'])->name('formRegist');
  Route::post('/registration/form', [RegistrationController::class, 'storeForm'])->name('storeForm');
});

Route::middleware('auth')->group(function () {
  Route::get('/infohimsi', [UserAuthController::class, 'infohimsi'])->name('infohimsi');
});

Route::middleware('guest:admin')->group(function () {
  Route::get('/bph/admin', [AdminAuthController::class, 'login'])->name('admin');
  Route::post('/bph/admin', [AdminAuthController::class, 'storeLogin']);
});

Route::middleware('auth:admin')->group(function () {
  Route::post('/bph/admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');
  Route::get('/bph/admin/logout', [AdminAuthController::class, 'logout'])->name('adminLogout');
  
  Route::get('/bph/admin/dashboard', [AdminController::class, 'dashboard'])->name('adminDashboard');

  Route::get('/bph/admin/dashboard/recruit', [AdminController::class, 'recruit'])->name('recruit');
  Route::post('/bph/admin/dashboard/recruit', [AdminController::class, 'storeRecruit'])->name('storeRecruit');

  Route::get('/bph/admin/dashboard/forgotPassword', [AdminController::class, 'forgotPassword'])->name('forgotPassword');
  Route::post('/bph/admin/dashboard/forgotPassword', [AdminController::class, 'storeForgotPassword']);

  Route::get('/bph/admin/dashboard/profil/{id}', [AdminController::class, 'profil'])->name('profil', 'id');
});