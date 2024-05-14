<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisTrash extends Model
{
    use HasFactory;
    protected $table = 'jenis_trashes';
    protected $primaryKey = 'idJenisTrash';
    protected $fillable = [
        'jenisTrash',
        'poinTrash',
    ];
}
