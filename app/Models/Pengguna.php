<?php

namespace App\Models;

use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasMany;
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
    protected $guard = 'web';

    public function updatePassword($newPassword)
    {
        $this->passwordpengguna = $newPassword;
        $this->save();
    }

    public function getAuthIdentifier()
    {
        return $this->getKey(); // Mengembalikan ID pengguna
    }

    public function getAuthPassword()
    {
        return $this->password; // Mengembalikan kata sandi yang di-hash
    }
    
    public function detail_trashes() : HasMany {
        return $this->hasMany(DetailTrash::class, 'idpengguna', 'idpengguna');
    }

    public function vouchers() : HasMany {
        return $this->hasMany(DetailTrash::class, 'idpengguna', 'idpengguna');
    }
}