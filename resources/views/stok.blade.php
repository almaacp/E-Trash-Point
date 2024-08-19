@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 15rem; padding-right: 15rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green;">STOK HADIAH: {{ $hadiahs->namaHadiah }}</h1>
        </div>
    </div>
    <div style="font-size: 20px">
        Cek konter yang masih menyediakan stok hadiah yang telah diklaim. Jangan lupa untuk segera mengambil hadiah sebelum masa berlaku voucher berakhir di 
        <a href="@if (request()->is('user/kataloghadiah'))
            /user/klaimhadiah 
            @else
            /login
            @endif"
            style="color: rgb(0, 200, 0)">Klaim Hadiah</a>!
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Konter</th>
                    <th>Stok</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($konters as $konter)
                    <tr>
                        <td>{{ $konter->lokasiKonter }}</td>
                        <td>200</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="@if (request()->is('user/kataloghadiah/stok'))
            /kataloghadiah
            @else
            /user/kataloghadiah
            @endif" class="btn btn-secondary">BACK</a>
    </div>
</div>   

@endsection