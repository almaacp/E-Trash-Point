@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 8rem; padding-right: 8rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">PILIH HADIAH</h1>
        </div>
        <div class="col-auto" style="margin-right: 3rem">
            <a href="/user/klaimhadiah" class="btn btn-secondary" style="font-size: 20px">BACK</a>
        </div>
    </div>
    <div style="font-size: 20px">
        Cek jumlah poin yang telah dikumpulkan dan tukar dengan hadiah yang jumlah poinnya mencukupi.
    </div>
    <form action="{{ url('/user/klaimhadiah') }}" method="post">
        @csrf

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
                            <button class="mt-3 btn btn-light" type="submit">Klaim Hadiah</button>
                        </div>
                    </div>
                </div>            
                @endforeach
            @endif
        </div>

    </form>
</div>   

@endsection