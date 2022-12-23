<?php

namespace App\Http\Controllers;

use App\Models\tbl_lot_lelang;
use Illuminate\Http\Request;

class TblLotLelangController extends Controller
{
    public function index()
    {
        return view('lot-lelang.index',[
            'pagetitle'=>'Lot Lelang',
            'data'=>tbl_lot_lelang::paginate(10)->withQueryString(),
        ]);
    }
}
