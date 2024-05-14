<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pengguna extends Authenticatable
{
    use HasFactory;

    protected $table = 'penggunas';
    protected $primaryKey = 'idpengguna';
    protected $fillable = [
        'namapengguna',
        'alamatpengguna',
        'telppengguna',
        'jkpengguna',
        'emailpengguna',
        'usernamepengguna',
        'passwordpengguna',
    ];

    public function updatePassword($newPassword)
    {
        $this->passwordpengguna = $newPassword;
        $this->save();
    }
}