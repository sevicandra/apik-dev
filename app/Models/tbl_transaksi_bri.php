<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_transaksi_bri extends Model
{
    use HasFactory;
    protected $connection= "mysql_bri";
    protected $table= "tbl_transaksi";
}
