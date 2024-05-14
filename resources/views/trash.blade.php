@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 15rem; padding-right: 15rem">
    <div class="row">
        <div>
            <h1 class="bold-text" style="font-size: 50px; color: green">INFO TRASH</h1>
        </div>
    </div>
    <div style="font-size: 20px">
        Jika ingin membuang sampah, dapat menuju ke
        <a href="@if (request()->is('user/infotrash'))
        /user/historibuangsampah 
        @else
        /login
        @endif"
        style="color: rgb(0, 200, 0)">Buang Sampah</a>
    </div>
    <div style="font-size: 18px; font-weight:bold">
        <br> Keterangan poin: 
    </div>
    <div style="font-size: 18px">
        - Sampah gelas plastik = 1 point/pcs
        <br> - Sampah kaleng = 2 point/pcs
        <br> - Sampah botol plastik 600ml = 2 point/pcs
        <br> - Sampah botol plastik 1L = 5 point/pcs
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Trash</th>
                    <th>Lokasi</th>
                    <th>Jenis Trash</th>
                    <th>Status Trash</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trashes as $trash)
                    <tr>
                        <td>{{ $trash->idTrash }}</td>
                        <td>{{ $trash->lokasiTrash }}</td>
                        <td>{{ $trash->jenisTrash }}</td>
                        <td>{{ $trash->statusTrash }}</td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>   

@endsection