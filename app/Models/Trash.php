<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

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
        'statusTrash' => 'Aktif',
    ];
    protected $casts = [
        'idTrash' => 'string',
    ];

    public function detail_trashes() : HasMany {
        return $this->hasMany(DetailTrash::class, 'idTrash', 'idTrash');
    }
}