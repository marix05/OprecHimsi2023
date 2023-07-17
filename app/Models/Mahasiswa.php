<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'nim',
        'nama',
        'akt',
        'kelas'
    ];

    public static function isNIMValid($nim) {
        if (Mahasiswa::where('nim', '=', $nim)->exists()) {
            return Mahasiswa::where('nim', '=', $nim)->first();
        } return false;
    }
}
