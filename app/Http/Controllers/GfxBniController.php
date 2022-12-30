<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Pagination\LengthAwarePaginator;
use stdClass;

class GfxBniController extends Controller
{
    public function index()
    {
        return view('gfx-bni.index',[
            'pagetitle'=> 'GFX BNI'
        ]);
    }

    public function reader(Request $request)
    {
        $request->validate([
            'file'=>'required'
        ]);
        $contents = File::get($request->file('file'));
        $lines = explode("\n", $contents);
        $collection = collect();
        foreach ($lines as $line) {
            $report = explode(':', $line);
            if (isset($report[1]) && isset($report[2])) {
                if ($report[1] === '61' || $report[1] === '86') {
                    $object = new stdClass();
                    $object->code = $report[1];
                    $object->detail = $report[2];
                    $collection->push($object);
                }
            }
            // array_push($array, $report);
        }

        // $data = $this->paginate($collection, 10, request('page'), ['path'=>' ']);
        // return $collection;
        return view('gfx-bni.reader',[
            'data'=>$collection,
            'pagetitle'=> 'GFX BNI'
        ]);
    }

}
