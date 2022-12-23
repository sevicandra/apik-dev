<?php

namespace App\Http\Controllers;

use App\Models\tbl_mandiri_va;
use App\Models\tbl_notif_online_mandiri;
use Illuminate\Http\Request;

class TblTransaksiMandiriController extends Controller
{
    public function index()
    {
        switch (request('j')) {
            case 'notif':
                return view('mandiri.notif',[
                    'pagetitle'=> 'Transaksi Mandiri / Notifikasi Online',
                    'data'=>tbl_notif_online_mandiri::paginate(10)->withQueryString()
                ]);
                break;
            
            default:
                return view('mandiri.va',[
                    'pagetitle'=> 'Transaksi Mandiri / Virtual Account',
                    'data'=>tbl_mandiri_va::paginate(10)->withQueryString()
                ]);
                break;
        }
    }
}
