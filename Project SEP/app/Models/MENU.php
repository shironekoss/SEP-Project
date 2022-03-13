<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MENU extends Model
{
    use HasFactory;

    protected $table        = "menu";
    protected $primaryKey   = "menu_id";
    public $incrementing    = true;
    public $timestamps      = true;

    protected $fillable = [
        'nama_menu',
        'harga_menu',
        'deskripsi_menu',
        'foto_menu',
    ];
}
