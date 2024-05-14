<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hadiah extends Model
{
    use HasFactory;
    protected $table = 'hadiahs';
    protected $primaryKey = 'idHadiah';
    protected $fillable = [
        'namaHadiah',
        'poinHadiah',
        'gambarHadiah',
    ];
}
