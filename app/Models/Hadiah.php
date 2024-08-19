<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function hadiahs() : HasMany {
        return $this->hasMany(DetailTrash::class, 'idHadiah', 'idHadiah');
    }
}
