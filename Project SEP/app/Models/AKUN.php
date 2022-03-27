<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AKUN extends Model
{
    use HasFactory;

    protected $table        = "akun";
    protected $primaryKey   = "akun_id";
    public $incrementing    = true;
    public $timestamps      = false;

    protected $fillable = [
        'akun_user',
        'akun_nama',
        'akun_password',
        'akun_role',
        'status',
    ];
}
