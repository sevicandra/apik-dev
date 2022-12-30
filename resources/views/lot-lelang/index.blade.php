@extends('layout.main')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="text-center">
            <tr class="align-middle">
                <th>No</th>
                <th>id_permohonan</th>
                <th>kode </th>
                <th>id_unit_kerja</th>
                <th>id_provinsi</th>
                <th>id_kota</th>
                <th>alamat</th>
                <th>id_pejabat_lelang</th>
                <th>cara_penawaran</th>
                <th>jenis_transaksi</th>
                <th>jenis_lelang</th>
                <th>jenis_barang</th>
                <th>tgl_dibuat</th>
                <th>nama</th>
                <th>tgl_mulai</th>
                <th>tgl_ditutup </th>
                <th>tgl_batas_jaminan</th>
                <th>id_tempat_lelang</th>
                <th>status</th>
                <th>edit_asisten</th>
                <th>nilai_limit</th>
                <th>uang_jaminan</th>
                <th>kelipatan_bid</th>
                <th>uraian</th>
                <th>id_pemenang</th>
                <th>nama_pemenang</th>
                <th>email_pemenang</th>
                <th>alamat_pemenang</th>
                <th>nik_pemenang</th>
                <th>npwp_pemenang</th>
                <th>harga_laku</th>
                <th>bea_lelang_pembeli</th>
                <th>bea_lelang_penjual</th>
                <th>status_pelunasan</th>
                <th>tgl_batas_pelunasan</th>
                <th>img_ver</th>
                <th>dwh</th>
                <th>jml_peserta</th>
                <th>jml_peserta_setor_jaminan</th>
                <th>jml_peserta_sah</th>
                <th>kode_billing_permohonan</th>
                <th>konfirm_pelunasan_benma</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($data as $item)  
            <tr class="align-middle">
                <td class="text-center"> {{$i++}} </td>
                <td>{{$item->id_permohonan}}</td>
                <td>{{$item->kode}} </td>
                <td>{{$item->id_unit_kerja}}</td>
                <td>{{$item->id_provinsi}}</td>
                <td>{{$item->id_kota}}</td>
                <td>{{$item->alamat}}</td>
                <td>{{$item->id_pejabat_lelang}}</td>
                <td>{{$item->cara_penawaran}}</td>
                <td>{{$item->jenis_transaksi}}</td>
                <td>{{$item->jenis_lelang}}</td>
                <td>{{$item->jenis_barang}}</td>
                <td>{{$item->tgl_dibuat}}</td>
                <td>{{$item->nama}}</td>
                <td>{{$item->tgl_mulai}}</td>
                <td>{{$item->tgl_ditutup}} </td>
                <td>{{$item->tgl_batas_jaminan}}</td>
                <td>{{$item->id_tempat_lelang}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->edit_asisten}}</td>
                <td>{{$item->nilai_limit}}</td>
                <td>{{$item->uang_jaminan}}</td>
                <td>{{$item->kelipatan_bid}}</td>
                <td>{{$item->uraian}}</td>
                <td>{{$item->id_pemenang}}</td>
                <td>{{$item->nama_pemenang}}</td>
                <td>{{$item->email_pemenang}}</td>
                <td>{{$item->alamat_pemenang}}</td>
                <td>{{$item->nik_pemenang}}</td>
                <td>{{$item->npwp_pemenang}}</td>
                <td>{{$item->harga_laku}}</td>
                <td>{{$item->bea_lelang_pembeli}}</td>
                <td>{{$item->bea_lelang_penjual}}</td>
                <td>{{$item->status_pelunasan}}</td>
                <td>{{$item->tgl_batas_pelunasan}}</td>
                <td>{{$item->img_ver}}</td>
                <td>{{$item->dwh}}</td>
                <td>{{$item->jml_peserta}}</td>
                <td>{{$item->jml_peserta_setor_jaminan}}</td>
                <td>{{$item->jml_peserta_sah}}</td>
                <td>{{$item->kode_billing_permohonan}}</td>
                <td>{{$item->konfirm_pelunasan_benma}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('pagination')
{{ $data->links() }}
@endsection