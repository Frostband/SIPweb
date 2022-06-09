<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Modellaporan extends Model
{
    use HasFactory;
    protected $table = 'transaksi';
    protected $primaryKey = 'trans_id';
    public $timestamps = false;
}
