<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_transaksi_bni extends Model
{
    use HasFactory;
    protected $connection= "mysql_bni";
    protected $table= "tbl_transaksi";
}
