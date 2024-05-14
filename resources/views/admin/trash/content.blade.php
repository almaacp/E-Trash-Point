@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 10rem; padding-right: 10rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green;">INFO TRASH</h1>
        </div>
        <div class="mt-1 col-auto">
            <a href="infotrash/add" type="button" class="btn btn-outline-success" style="font-size: 18px">+ ADD</a>
        </div>
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>Kode Trash</th>
                    <th>Lokasi</th>
                    <th>Jenis Trash</th>
                    <th>Status Trash</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trashes as $trash)
                    <tr>
                        <td>{{ $trash->idTrash }}</td>
                        <td>{{ $trash->lokasiTrash }}</td>
                        <td>{{ $trash->jenisTrash }}</td>
                        <td>
                            @if($trash->statusTrash == 'Aktif')
                                <form action="{{ url('admin/infotrash/update-status/'.$trash->idTrash) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-info">
                                        AKTIF
                                    </button>
                                </form>
                            @else
                                <form action="{{ url('admin/infotrash/update-status/'.$trash->idTrash) }}" method="post">
                                    @csrf
                                    <button type="submit" class="btn btn-warning">
                                        MAINTENANCE
                                    </button>
                                </form>
                            @endif
                        </td>                        
                        <td>
                            <form action="{{ url('admin/infotrash/'.$trash->idTrash) }}" method="post">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-link" style="color: red;">
                                    <i class="fas fa-trash-alt"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <br>
        <form action="{{ url('admin/infotrash') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="font-size: 18px">
                DELETE ALL
            </button>
        </form>
    </div>
</div>   

@endsection