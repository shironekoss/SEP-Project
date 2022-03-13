<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ANTRIAN extends Model
{
    use HasFactory;

    protected $table        = "antrian";
    protected $primaryKey   = "antrian_id";
    public $incrementing    = true;
    public $timestamps      = false;

    protected $fillable = [
        'nomor_antrian',
        'tgl_antrian'
    ];

    // public function dinvoice_relations(){
    //     return $this -> hasMany(Dinvoice::class, 'game_id','game_id');
    // }
}
