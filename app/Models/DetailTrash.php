<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailTrash extends Model
{
    protected $table = 'detail_trashes';
    protected $primaryKey = ['idPengguna','idTrash'];
    protected $fillable = [
        'idPengguna',
        'idTrash',
        'tglPembuangan',
        'jumlahPoin',
    ];
}