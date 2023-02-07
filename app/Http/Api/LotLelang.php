<?php

namespace App\Http\Api;

use Illuminate\Support\Facades\Http;

class LotLelang
{
    public static function get(){
        $data = Http::get('http://10.10.5.176/apik-api/public/api/lotlelang',[
            'limit'=>15
        ]);
        return json_decode($data)->data;
    }

    public static function getDetail($id){
        $data = Http::get('http://10.10.5.176/apik-api/public/api/pesertalelang/'.$id);
        return json_decode($data)->data;
    }
}