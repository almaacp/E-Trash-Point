@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 15rem; padding-right: 15rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green;">KONTER</h1>
        </div>
        <div class="mt-1 col-auto">
            <a href="konter/add" type="button" class="btn btn-outline-success" style="font-size: 18px">+ ADD</a>
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
                    <th>No</th>
                    <th>Lokasi Konter</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Jl. Tunjungan no 46</td>
                    <td><a href="konter/update"><i class="fas fa-edit" style="color: blue"></a></td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Jl. Dharmahusada no 46</td>
                    <td><a href="konter/update"><i class="fas fa-edit" style="color: blue"></a></td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>Jl. Dr. Ir. Soekarno no 46</td>
                    <td><a href="konter/update"><i class="fas fa-edit" style="color: blue"></a></td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>Jl. Diponegoro no 46</td>
                    <td><a href="konter/update"><i class="fas fa-edit" style="color: blue"></a></td>
                    <td><a href=""><i class="fas fa-trash-alt" style="color: red"></a></td>
                </tr>
            </tbody>
        </table>
        <br>
        <a href="" type="button" class="btn btn-danger" style="font-size: 18px">DELETE ALL</a>
    </div>
</div>   

@endsection