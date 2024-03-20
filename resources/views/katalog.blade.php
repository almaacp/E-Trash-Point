@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 3rem; padding-right: 3rem">
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
        <style>
            .card-img-top {
                size: 512px
            }
            .card-text {
                font-size: 18px
            }
        </style>
        <div class="col">
            <div class="card text-bg-success mb-3" style="width: 18rem;">
                <img src="{{ asset('gambar/kaos.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h2 class="card-title">KAOS</h2>
                    <p class="card-text">100 poin</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-success mb-3" style="width: 18rem;">
                <img src="{{ asset('gambar/notebook.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h2 class="card-title">NOTEBOOK</h2>
                    <p class="card-text">30 poin</p>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card text-bg-success mb-3" style="width: 18rem;">
                <img src="{{ asset('gambar/totebag.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h2 class="card-title">TOTEBAG</h2>
                    <p class="card-text">50 poin</p>
                </div>
            </div>
        </div>
    </div>
</div>   

@endsection