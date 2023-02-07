<?php

namespace App\Http\Controllers;

use App\Http\Api\LotLelang;

class TblLotLelangController extends Controller
{
    public function index()
    {
        return view('lot-lelang.index',[
            'pagetitle'=>'Lot Lelang',
            'data'=>LotLelang::get()->data
        ]);
    }

    public function detail($id){
        return view('lot-lelang.detail',[
            'pagetitle'=>'Detail Lelang',
            'data'=>LotLelang::getdetail($id)
        ]);
    }
}
