@extends('mandiri.layout.main')
@section('contentmandiri')
    <table class="table table-bordered table-hover">
        <thead class="text-center">
            <tr class="align-middle">
                <th>No</th>
                <th>status</th>
                <th>statusMessage</th>
                <th>transactionTimeReport</th>
                <th>transactionID</th>
                <th>transactionDate</th>
                <th>transactionTime</th>
                <th>transactionReference</th>
                <th>transactionCode</th>
                <th>transactionType</th>
                <th>fromAccount</th>
                <th>toAccount</th>
                <th>amount</th>
                <th>currency</th>
                <th>branch</th>
                <th>remark1</th>
                <th>remark2</th>
                <th>remark3</th>
                <th>remark4</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($data as $item)  
            <tr class="align-middle">
                <td class="text-center"> {{$i++}} </td>
                <td>{{$item->status}}</td>
                <td>{{$item->statusMessage}}</td>
                <td>{{$item->transactionTimeReport}}</td>
                <td>{{$item->transactionID}}</td>
                <td>{{$item->transactionDate}}</td>
                <td>{{$item->transactionTime}}</td>
                <td>{{$item->transactionReference}}</td>
                <td>{{$item->transactionCode}}</td>
                <td>{{$item->transactionType}}</td>
                <td>{{$item->fromAccount}}</td>
                <td>{{$item->toAccount}}</td>
                <td>{{$item->amount}}</td>
                <td>{{$item->currency}}</td>
                <td>{{$item->branch}}</td>
                <td>{{$item->remark1}}</td>
                <td>{{$item->remark2}}</td>
                <td>{{$item->remark3}}</td>
                <td>{{$item->remark4}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection

@section('pagination')
{{ $data->links() }}
@endsection