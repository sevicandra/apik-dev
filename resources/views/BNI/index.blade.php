@extends('layout.main')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="text-center">
            <tr class="align-middle">
                <th>No</th>
                <th>trx_id</th>
                <th>nomor_va</th>
                <th>payment_amount</th>
                <th>comulative_payment_amount</th>
                <th>payment_ntb</th>
                <th>datetime_payment</th>
                <th>report_date</th>
                <th>report_by</th>
                <th>status</th>
                <th>status_message</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($data as $item)  
            <tr class="align-middle">
                <td class="text-center">{{$i++}}</td>
                <td>{{$item->trx_id}}</td>
                <td>{{$item->nomor_va}}</td>
                <td>{{$item->payment_amount}}</td>
                <td>{{$item->comulative_payment_amount}}</td>
                <td>{{$item->payment_ntb}}</td>
                <td>{{$item->datetime_payment}}</td>
                <td>{{$item->report_date}}</td>
                <td>{{$item->report_by}}</td>
                <td>{{$item->status}}</td>
                <td>{{$item->status_message}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('pagination')
{{ $data->links() }}
@endsection