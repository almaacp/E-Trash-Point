<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Konter extends Model
{
    use HasFactory;

    protected $table = 'konters';
    protected $primaryKey = 'idKonter';
    protected $fillable = [
        'lokasiKonter',
    ];
}
