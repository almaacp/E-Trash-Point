<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Trash extends Model
{
    protected $table = 'trashes';
    protected $primaryKey = 'idTrash';
    protected $fillable = [
        'idTrash',
        'idJenisTrash',
        'lokasiTrash',
        'statusTrash',
    ];
    protected $attributes = [
        'statusTrash' => 'Aktif', // Menetapkan nilai default 'Aktif' untuk kolom 'statusTrash'
    ];
    protected $casts = [
        'idTrash' => 'string',
    ];
}