@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 8rem; padding-right: 8rem">
    <div class="row">
        <div>
            <h1 class="bold-text" style="font-size: 50px; color: green">KATALOG HADIAH</h1>
        </div>
        <div style="font-size: 20px">
            Cek jumlah poin yang telah dikumpulkan dan tukar dengan hadiah yang jumlah poinnya mencukupi di 
            <a href="@if (request()->is('user/kataloghadiah'))
            /user/klaimhadiah 
            @else
            /login
            @endif"
            style="color: rgb(0, 200, 0)">Klaim Hadiah</a>.
        </div>
    </div>
    <div class="mt-5 row">
        @if($hadiahs->isEmpty())
        @else
            @foreach ($hadiahs as $hadiah)
            <div class="col-4">
                <div class="card text-bg-success mb-3" style="width: 18rem;">
                    <img src="{{ asset('gambar/'.$hadiah->gambarHadiah) }}" class="card-img-top" alt="">
                    <div class="card-body">
                        <h2 class="card-title-katalog">{{ $hadiah->namaHadiah }}</h2>
                        <p class="card-text">{{ $hadiah->poinHadiah." poin" }}</p>
                        <a type="button" class="mt-3 card-text btn btn-light" href="{{ url('user/kataloghadiah/'.$hadiah->idHadiah.'/stok') }}">Cek Stok</a>
                    </div>
                </div>
            </div>            
            @endforeach
        @endif
    </div>
    <br>
</div>   

@endsection