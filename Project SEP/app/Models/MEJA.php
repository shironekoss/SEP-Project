<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MEJA extends Model
{
    use HasFactory;

    protected $table        = "meja";
    protected $primaryKey   = "meja_id";
    public $incrementing    = true;
    public $timestamps      = false;

    protected $fillable = [
        'no_meja',
        'jumlah_kursi',
        'status_meja'
    ];
}
