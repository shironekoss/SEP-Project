<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PESANANCART extends Model
{
    use HasFactory;

    protected $table        = "pesanancart";
    protected $primaryKey   = "pesanancart_id";
    public $incrementing    = true;
    public $timestamps      = true;

    protected $fillable = [
        'menu_id',
        'quantity',
        'akun_id',
        'verifikasi',
    ];

}
