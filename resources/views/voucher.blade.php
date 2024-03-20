@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 40rem;">
        <div class="card-body animated-content">
            <p class="card-text">
                <h1 class="card-title" style="color: green; font-size: 20px">
                    <i class="fas fa-gift"></i> KLAIM HADIAH
                </h1>
                <h1 class="card-title text-center mt-5" style="color: green; font-weight:bold; font-size: 50px">
                    VOUCHER
                </h1>
                <p class="text-body-secondary text-center">
                    Kode Voucher: 12345678
                </p>
                <img style="width: 620px" src="{{ asset('gambar/notebook.png') }}" alt="">
                <p class="text-center" style="font-size: 25px">NOTEBOOK (50 poin)</p>
                <br><br>
                <p class="text-body-secondary">Berlaku hingga 7 Maret 2024</p>
            </div>
          </p>
        </div>
    </div>
</div>
    
@endsection