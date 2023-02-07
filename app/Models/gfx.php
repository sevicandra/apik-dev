<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gfx extends Model
{
    protected $table = 'gfx';
    public $timestamps = false;
    protected $fillable=[
        'code',
        'detail'
    ];
}