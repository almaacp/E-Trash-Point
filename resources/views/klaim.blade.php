@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 3rem; padding-right: 3rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">KLAIM HADIAH</h1>
        </div>
        <div class="mt-1 col-auto">
            <a href="/user/pilihhadiah" type="button" class="btn btn-outline-success" style="font-size: 18px">+ Klaim Hadiah</a>
        </div>
    </div>
    <div style="font-size: 20px">
        Info seputar hadiah dan poinnya dapat dilihat di <a href="{{ url('/user/kataloghadiah') }}" style="color: green">Katalog Hadiah</a>
    </div>
    <div style="font-size: 18px; font-weight:bold">
        <br> Ketentuan klaim hadiah: 
    </div>
    <div style="font-size: 18px">
        - Saat melakukan klaim, user secara otomatis akan mendapatkan voucher yang dapat ditukarkan dengan hadiah
        <br> - Hadiah dapat diambil di cabang <a href="/user/konter" style="color:green">Konter E-Trash Point</a> mana pun
        <br> - Masa berlaku voucher adalah 7 hari setelah tanggal klaim
        <br> - User dapat menghapus voucher yang telah diklaim sebelum masa berlaku voucher habis dan poin user akan kembali seperti semula
        <br> - User dapat mengganti hadiah yang telah diklaim maksimal 2 hari setelah tanggal klaim
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Tanggal Klaim</th>
                    <th>Nama Hadiah</th>
                    <th>Poin</th>
                    <th>Voucher</th>
                    <th>Edit Klaim</th>
                    <th>Hapus Klaim</th>
                    <th>Status</th>
                    <th>Tanggal Ambil</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($vouchers as $voucher)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $voucher->tglKlaim }}</td>
                        <td>{{ $voucher->namaHadiah }}</td>
                        <td>{{ $voucher->poinHadiah }}</td>
                        <td><a href="/user/klaimhadiah/voucher" style="color: green"><i class="fas fa-ticket-alt"></i></a></td>
                        <td><a href="/user/pilihhadiah"><i class="fas fa-edit" style="color: blue"></i></a></td>
                        <td><a href=""><i class="fas fa-trash-alt" style="color: red"></i></a></td>
                        <td>Belum diambil</td>
                        <td>-</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>   

@endsection