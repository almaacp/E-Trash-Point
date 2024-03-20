<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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
        'poinpengguna',
        'fotopengguna',
    ];
}