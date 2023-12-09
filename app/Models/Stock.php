<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    public $table = "tbl_stock";
    protected $fillable = [
        'kodebrg',
        'qtybeli',
    ];
}
