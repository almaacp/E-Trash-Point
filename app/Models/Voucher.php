<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Voucher extends Model
{
    use HasFactory;

    protected $table = 'vouchers';
    protected $primaryKey = ['idVoucher'];
    protected $fillable = [
        'idpengguna',
        'idHadiah',
        'tglKlaim',
    ];
    protected $attributes = [
        'statusVoucher' => 'Berlaku',
    ];

    public function penggunas() : BelongsTo {
        return $this->belongsTo(Pengguna::class, 'idpengguna', 'idpengguna');
    }

    public function hadiahs() : BelongsTo {
        return $this->belongsTo(Trash::class, 'idHadiah', 'idHadiah');
    }
}
