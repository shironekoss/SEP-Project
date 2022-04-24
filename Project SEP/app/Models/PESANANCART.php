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

    public function menu_relation(){
        return $this -> hasOne(MENU::class, 'menu_id','menu_id');
    }
}
