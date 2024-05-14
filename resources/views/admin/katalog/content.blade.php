@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 10rem; padding-right: 10rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green;">KATALOG HADIAH</h1>
        </div>
        <div class="mt-1 col-auto">
            <a href="kataloghadiah/add" type="button" class="btn btn-outline-success" style="font-size: 18px">+ ADD</a>
        </div>
    </div>
    <div class="mt-5 row">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Hadiah</th>
                    <th>Poin Hadiah</th>
                    <th>Gambar Hadiah</th>
                    <th>Stok</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($hadiahs as $hadiah)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $hadiah->namaHadiah }}</td>
                        <td>{{ $hadiah->poinHadiah }}</td>
                        <td>
                            <a href="{{ asset('gambar/'.$hadiah->gambarHadiah) }}" style="color: rgb(0, 185, 0)" data-lightbox="gambar" data-title="{{ $hadiah->gambarHadiah }}">{{ $hadiah->gambarHadiah }}</a>
                        </td>
                        <td>
                            <a href="{{ url('admin/kataloghadiah/stok') }}">
                                <i class="fas fa-box" style="color: green"></i>
                            </a>
                        </td>
                        <td>
                            <a href="{{ url('admin/kataloghadiah/'.$hadiah->idHadiah.'/update') }}">
                                <i class="fas fa-edit" style="color: blue"></i>
                            </a>
                        </td>
                        <td>
                            <form action="{{ url('admin/kataloghadiah/'.$hadiah->idHadiah) }}" method="post">
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
    </div>
    <br><br>
    <form action="{{ url('admin/kataloghadiah') }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" style="font-size: 18px">
            DELETE ALL
        </button>
    </form>

</div>

@endsection