@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 15rem; padding-right: 15rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">INFO TRASH</h1>
        </div>
        <div class="mt-1 col-auto">
            <a href="admin/infotrash/create" type="button" class="btn btn-outline-success" style="font-size: 18px">+ CREATE</a>
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
                font-size: 25px;
            }
            .table td {
                font-size: 20px;
            }
        </style>
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Trash</th>
                    <th>Lokasi</th>
                    <th>Jenis Trash</th>
                    <th>Status Trash</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>G-0001</td>
                    <td>Jl. Tunjungan no 46</td>
                    <td>Gelas Plastik</td>
                    <td>Aktif</td>
                    <td><a href=""><i class="fas fa-edit" style="color: blue"></a></td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>K-0001</td>
                    <td>Jl. Tunjungan no 46</td>
                    <td>Kaleng</td>
                    <td>Aktif</td>
                    <td><a href=""><i class="fas fa-edit" style="color: blue"></a></td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>B6-0001</td>
                    <td>Jl. Tunjungan no 46</td>
                    <td>Botol Plastik 600ml</td>
                    <td>Aktif</td>
                    <td><a href=""><i class="fas fa-edit" style="color: blue"></a></td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>B1-0001</td>
                    <td>Jl. Tunjungan no 46</td>
                    <td>Botol Plastik 1L</td>
                    <td>Aktif</td>
                    <td><a href=""><i class="fas fa-edit" style="color: blue"></a></td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="" type="button" class="btn btn-danger" style="font-size: 18px">DELETE ALL</a>
    </div>
</div>   

@endsection