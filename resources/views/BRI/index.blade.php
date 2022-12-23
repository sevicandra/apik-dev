@extends('layout.main')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="text-center">
            <tr class="align-middle">
                <th>No</th>
                <th>VA</th>
                <th>Jumlah</th>
                <th>Kode Jurnal</th>
                <th>tanggal</th>
                <th>Tanggal Report</th>
                <th>Report By</th>
                <th>Status</th>
                <th>Status Message</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($data as $item)  
            <tr class="align-middle">
                <td class="text-center"> {{$i++}} </td>
                <td>{{$item->virtual_account}}</td>
                <td>{{$item->jumlah}}</td>
                <td>{{$item->kode_jurnal}}</td>
                <td>{{$item->tanggal}}</td>
                <td>{{$item->tanggal_report}}</td>
                <td>{{$item->report_by}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->status_message}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection