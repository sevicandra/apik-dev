@extends('mandiri.layout.main')
@section('contentmandiri')
    <table class="table table-bordered table-hover">
        <thead class="text-center">
            <tr class="align-middle">
                <th>No</th>
                <th>id_unit_kerja</th>
                <th>status</th>
                <th>mft_status</th>
                <th>tgl_dipakai</th>
                <th>masa_berlaku</th>
                <th>nomor_va</th>
                <th>nama_rekening</th>
                <th>id_lelang</th>
                <th>id_pengguna</th>
                <th>kode_lelang</th>
                <th>nama_perserta</th>
                <th>mft_info</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($data as $item)  
            <tr class="align-middle">
                <td class="text-center"> {{$i++}} </td>
                <td>{{$item->id_unit_kerja}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->mft_status}}</td>
                <td>{{$item->tgl_dipakai}}</td>
                <td>{{$item->masa_berlaku}}</td>
                <td>{{$item->nomor_va}}</td>
                <td>{{$item->nama_rekening}}</td>
                <td>{{$item->id_lelang}}</td>
                <td>{{$item->id_pengguna}}</td>
                <td>{{$item->kode_lelang}}</td>
                <td>{{$item->nama_perserta}}</td>
                <td>{{$item->mft_info}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>


@endsection