@extends('layout.main')
@section('content')
<div class="row mb-2">
    <div class="col">
        <a href="{{config('app.url')}}/transaksi-mandiri?j=va" class="btn btn-sm btn-outline-success ml-1 mt-1 mb-1 @if (request('j') != 'notif') active @endif">Virtual Account</a>
        <a href="{{config('app.url')}}/transaksi-mandiri?j=notif" class="btn btn-sm btn-outline-success ml-1 mt-1 mb-1 @if (request('j') === 'notif') active @endif">Notifikasi Online</a>
    </div>
</div>
<div class="table-responsive">
    @yield('contentmandiri')
</div>

@endsection