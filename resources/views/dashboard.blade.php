@extends('layouts.main')
@section('content')
    <h1>Halaman Dashboard</h1>
    <img src="{{ asset('img/nabil.jpg') }}" alt="" width="150px" style="margin: 5vh auto 5vh auto">
    <h3 >{{ $peserta->User->name }} /{{ $peserta->posisi }}</h3>
    <div class="table">
        <div class="row-container">
            <div class="table-headers">nama Jadwal</div>
            <div class="table-headers">tanggal</div>
            <div class="table-headers">status</div>
        </div>
    
        @foreach ($statistik as $item)
        <div class="row-container">
            <div class="table-content">{{ $item->Jadwal->namaJadwal }}</div>
            <div class="table-content">{{ $item->Jadwal->tanggalWaktu }}</div>
            <div class="table-content"> 
            @if ($item->status==0)
            {{ 'tidak hadir' }}
            @else
            {{ 'hadir' }}
            @endif 
            </div>
        </div>
        @endforeach
</div>
@endsection