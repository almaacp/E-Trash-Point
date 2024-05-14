@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 15rem; padding-right: 15rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">HISTORI BUANG SAMPAH</h1>
        </div>
        <div class="mt-1 col-auto">
            <a href="/user/buangsampah" type="button" class="btn btn-outline-success" style="font-size: 18px">+ Buang Sampah</a>
        </div>
    </div>
    <div style="font-size: 20px">
        Info seputar trash, kode, poin, dan lokasinya dapat dilihat di <a href="{{ url('/user/infotrash') }}" style="color: rgb(0, 200, 0)">Info Trash</a>
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Buang Sampah</th>
                    <th>Kode Trash</th>
                    <th>Poin</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($detailtrashes as $detailtrash)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $detailtrash->tglPembuangan }}</td>
                        <td>{{ $detailtrash->idTrash }}</td>
                        <td>{{ $detailtrash->jumlahPoin }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>   

@endsection
