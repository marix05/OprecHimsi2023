<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Mahasiswa;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
      'nim',  
      'nama',
      'tgl_lahir',
      'prodi',
      'kelas',
      'domisili',
      'pil1',
      'alasan1',
      'pil2',
      'alasan2',
      'tentang',
      'wawancara',
      'idline',
      'instagram',
      'foto',
      'khs',
      'bukti_ss',
      'password',
      'lulus',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
      'password',
      'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
      'email_verified_at' => 'datetime',
    ];

    public static function isRegistered($nim) {
        if (User::where('nim', '=', $nim)->exists()) {
            return true;
        } return false;
    }
}
