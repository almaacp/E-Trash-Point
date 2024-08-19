<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DetailTrash extends Model
{
    protected $table = 'detail_trashes';
    protected $hidden = ['idPengguna', 'idTrash'];
    protected $primaryKey = ['idpengguna', 'idTrash'];
    public $incrementing = false;
    protected $fillable = [
        'idpengguna',
        'idTrash',
        'tglPembuangan',
        'jumlahPoin',
    ];

    protected $attributes = [
        'statusPoin' => 'Belum Diverifikasi',
    ];

    protected $casts = [
        'idTrash' => 'string',
    ];

    public function pengguna() : BelongsTo {
        return $this->belongsTo(Pengguna::class, 'idpengguna', 'idpengguna');
    }

    public function trash() : BelongsTo {
        return $this->belongsTo(Trash::class, 'idTrash', 'idTrash');
    }
}