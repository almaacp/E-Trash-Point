@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 15rem; padding-right: 15rem">
    <div class="row">
        <div>
            <h1 class="bold-text" style="font-size: 50px; color: green">KONTER</h1>
        </div>
    </div>
    <div style="font-size: 20px">
        Kunjungi cabang konter di bawah ini untuk pengambilan hadiah. Jangan lupa tunjukkan voucher di 
        <a href="@if (request()->is('user/konter'))
            /user/klaimhadiah 
            @else
            /login
            @endif"
            style="color: rgb(0, 200, 0)">Klaim Hadiah</a>.
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Lokasi Konter</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($konters as $konter)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $konter->lokasiKonter }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>   

@endsection