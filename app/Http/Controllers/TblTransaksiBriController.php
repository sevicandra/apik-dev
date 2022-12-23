<?php

namespace App\Http\Controllers;

use App\Models\tbl_transaksi_bri;
use Illuminate\Http\Request;

class TblTransaksiBriController extends Controller
{
    public function index()
    {
        return view('BRI.index',[
            'data'=>tbl_transaksi_bri::paginate(10)->withQueryString(),
            'pagetitle'=> 'Transaksi BRI'
        ]);
    }
}
