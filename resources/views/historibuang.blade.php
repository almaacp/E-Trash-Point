@extends('front')

@section('content')

<div class="container animated-content" style="padding-left: 15rem; padding-right: 15rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">HISTORI BUANG SAMPAH</h1>
        </div>
        <div class="mt-1 col-auto">
            <a href="/user/buangsampah" type="button" class="btn btn-outline-success" style="font-size: 18px">+ Buang Sampah</a>
        </div>
    </div>
    <div style="font-size: 20px">
        Info seputar trash, kode, poin, dan lokasinya dapat dilihat di <a href="{{ url('/user/infotrash') }}" style="color: rgb(0, 200, 0)">Info Trash</a>
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
                    <th>No</th>
                    <th>Tanggal Buang Sampah</th>
                    <th>Kode Trash</th>
                    <th>Poin</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>25/2/2024</td>
                    <td>B1-0001</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>25/2/2024</td>
                    <td>B6-0001</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>25/2/2024</td>
                    <td>K-0001</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>27/2/2024</td>
                    <td>B6-0001</td>
                    <td>Belum diverifikasi</td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>27/2/2024</td>
                    <td>K-0001</td>
                    <td>Belum diverifikasi</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>   

@endsection
