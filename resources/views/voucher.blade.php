@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center animated-content">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
            <p class="card-text">
                <h1 class="card-title" style="color: green; font-size: 20px; margin-left: 1rem">
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
                <br>
            </div>
          </p>
          <p class="text-body-secondary" style="margin-left: 1rem">Berlaku hingga 7 Maret 2024</p>
        </div>
    </div>
</div>
    
@endsection