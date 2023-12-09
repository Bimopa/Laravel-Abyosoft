<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HargaBeli extends Model
{
    public $table = "tbl_hbeli";
    protected $fillable = [
        'notransaksi',
        'kodespl',
        'tglbeli',
    ];
}
