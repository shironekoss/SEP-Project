<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KARYAWAN extends Model
{
    use HasFactory;

    protected $table        = "karyawan";
    protected $primaryKey   = "karyawan_id";
    public $incrementing    = true;
    public $timestamps      = false;

    protected $fillable = [
        'nama_karyawan',
        'alamat_karyawan',
        'tgl_lahir',
        'jk_karyawan',
        'jabatan_karyawan',
        'no_telp'
    ];
}
