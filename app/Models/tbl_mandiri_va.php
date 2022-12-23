<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tbl_mandiri_va extends Model
{
    use HasFactory;
    protected $connection= "mysql_mandiri";
    protected $table= "tbl_mandiri_va";
}
