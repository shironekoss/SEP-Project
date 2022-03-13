<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PESANAN extends Model
{
    use HasFactory;

    protected $table        = "pesanan";
    protected $primaryKey   = "pesanan_id";
    public $incrementing    = true;
    public $timestamps      = true;

    protected $fillable = [
        'antrian_id',
        'meja_id',
        'karyawan_id',
        'tgl_pesanan',
        'waktu_pesanan',
        'status_pesanan',
        'grandtotal_pesanan',
        'method_payment'
    ];
}
