@extends('layout.main')
@section('content')
<div class="table-responsive">
    <table class="table table-bordered table-hover">
        <thead class="text-center">
            <tr class="align-middle">
                <th>No</th>
                <th>No Va</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i=1;
            @endphp
            @foreach ($data as $item)  
            <tr class="align-middle">
                <td class="text-center"> {{$i++}} </td>
                <td>{{$item->nomor_va}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

@endsection

@section('pagination')
{{-- {{ $data->links() }} --}}
@endsection