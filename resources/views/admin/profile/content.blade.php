@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 3rem; padding-right: 3rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">PROFILE USER</h1>
        </div>
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
                font-size: 22px;
            }
            .table td {
                font-size: 18px;
            }
        </style>
        <table class="table">
            <thead>
                <tr>
                    <th>ID User</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>Nomor Telepon</th>
                    <th>Jenis Kelamin</th>
                    <th>Email</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>001</td>
                    <td>almabunga</td>
                    <td>Alma Bunga</td>
                    <td>Surabaya</td>
                    <td>12345678</td>
                    <td>Perempuan</td>
                    <td>almabunga@mail.com</td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>002</td>
                    <td>bkausalya</td>
                    <td>Anak Agung Ayu Bunga Kausalya</td>
                    <td>Denpasar</td>
                    <td>12345678</td>
                    <td>Perempuan</td>
                    <td>bunga@mail.com</td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>003</td>
                    <td>almaacp</td>
                    <td>Alma Alya Cipta Putri</td>
                    <td>Surabaya</td>
                    <td>12345678</td>
                    <td>Perempuan</td>
                    <td>alma@mail.com</td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>004</td>
                    <td>almabunga</td>
                    <td>Alma Bunga</td>
                    <td>Surabaya</td>
                    <td>12345678</td>
                    <td>Perempuan</td>
                    <td>almabunga@mail.com</td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>005</td>
                    <td>bkausalya</td>
                    <td>Anak Agung Ayu Bunga Kausalya</td>
                    <td>Denpasar</td>
                    <td>12345678</td>
                    <td>Perempuan</td>
                    <td>bunga@mail.com</td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>006</td>
                    <td>almaacp</td>
                    <td>Alma Alya Cipta Putri</td>
                    <td>Surabaya</td>
                    <td>12345678</td>
                    <td>Perempuan</td>
                    <td>alma@mail.com</td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection