<?php

namespace App\Http\Controllers;

use App\Models\tbl_transaksi_bni;
use Illuminate\Http\Request;

class TblTransaksiBniController extends Controller
{
    public function index()
    {
        return view('BRI.index',[
            'data'=>tbl_transaksi_bni::paginate(10)->withQueryString(),
            'pagetitle'=> 'Transaksi BNI'
        ]);
    }
}
