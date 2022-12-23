<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_lot_lelang extends Model
{
    use HasFactory;
    protected $connection= "mysql_lot_lelang";
    protected $table= "tbl_lot_lelang";
}
