@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 15rem; padding-right: 15rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green;">STOK HADIAH: Notebook</h1>
        </div>
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Konter</th>
                    <th>Stok</th>
                    <th>Tambah</th>
                    <th>Kurang</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($konters as $konter)
                    <tr>
                        <td>{{ $konter->lokasiKonter }}</td>
                        <td>200</td>
                        <td><a href=""><i class="fas fa-plus"></i></a></td>
                        <td><a href=""><i class="fas fa-minus"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <a href="{{ url('admin/kataloghadiah') }}" class="btn btn-secondary">BACK</a>
    </div>
</div>   

@endsection