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
        <style>
            .table th,
            .table td {
                text-align: center;
                border-color: green;
            }
            .table th {
                padding-bottom: 10px;
                font-size: 25px;
            }
            .table td {
                font-size: 20px;
            }
        </style>
        <table class="table">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Lokasi Konter</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jl. Tunjungan no 46</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jl. Dharmahusada no 46</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jl. Dr. Ir. Soekarno no 46</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Jl. Diponegoro no 46</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>   

@endsection