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
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Lokasi Konter</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            @php
                $no=1;
            @endphp
            <tbody>
                @foreach ($konters as $konter)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $konter->lokasiKonter }}</td>
                        <td><a href="{{ url('admin/konter/'.$konter->idKonter.'/update') }}"><i class="fas fa-edit" style="color: blue"></a></td>
                        <td>
                            <form action="{{ url('admin/konter/'.$konter->idKonter) }}" method="post">
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
        <form action="{{ url('admin/konter') }}" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger" style="font-size: 18px">
                DELETE ALL
            </button>
        </form>
    </div>
</div>   

@endsection