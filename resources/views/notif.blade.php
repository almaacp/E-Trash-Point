@extends('front')

@section('content')

<style>
    .notif-title {
        font-size: 15pt;
    }
</style>

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 40rem;">
        <div class="card-body animated-content">
            <p class="card-text">
                <h1 class="card-title text-center" style="color: green">
                    <i class="fas fa-bell" style="font-size: 1em;"></i>
                </h1>                
                <h1 class="card-title text-center" style="color: green; font-weight:bold">
                    NOTIFICATION
                </h1><br>
                <div class="row">
                    <div class="col">
                        <div class="notif-segment bg-light border border-success p-3 rounded mb-3">
                            <a class="notif-title text-success" href="/user/klaimhadiah">KLAIM HADIAH</a>
                            <p class="notif-text">Vouchermu sebentar lagi akan kadalursa pada tanggal 27/3/2024. Segera tukarkan voucher dengan hadiah di konter terdekat!</p>
                        </div>
                        <div class="notif-segment bg-light border border-success p-3 rounded mb-3">
                            <a class="notif-title text-success" href="/user/historibuangsampah">HISTORI BUANG SAMPAH</a>
                            <p class="notif-text">Poinmu setelah membuang sampah di trash G-001 pada 20/3/2024 telah diverifikasi! Kumpulkan poin sebanyak-banyaknya dan tukar dengan hadiah</p>
                        </div>
                        <div class="notif-segment bg-light border border-success p-3 rounded mb-3">
                            <a class="notif-title text-success" href="/user">DASHBOARD</a>
                            <p class="notif-text">Selamat datang di E-Trash Point! Nikmati semua fitur yang ada di web ini dan jangan lupa untuk membuang sampah pada tempatnya</p>
                        </div>
                    </div>
                </div>
            </div>
          </p>
        </div>
    </div>
</div>
    
@endsection