@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 3rem; padding-right: 3rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">HISTORI BUANG SAMPAH</h1>
        </div>
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Kode Trash</th>
                    <th>Tanggal Buang</th>
                    <th>Poin</th>
                    <th>Verifikasi</th>
                </tr>
            </thead>
            @php
                $no = 1;
            @endphp
            <tbody>
                @foreach ($detailtrashes as $detailtrash)
                    <tr>
                        <td>{{ $no++ }}</td>
                        <td>{{ $detailtrash->pengguna ? $detailtrash->pengguna->usernamepengguna : 'N/A' }}</td> <!-- Cek null di sini -->
                        <td>{{ $detailtrash->idTrash }}</td>
                        <td>{{ $detailtrash->tglPembuangan }}</td>
                        <td>{{ $detailtrash->jumlahPoin }}</td>
                        <td>
                            <form action="{{ url('admin/historibuangsampah/update-status') }}" method="post">
                                @csrf
                                <input type="hidden" name="idTrash" value="{{ $detailtrash->idTrash }}">
                                <input type="hidden" name="idpengguna" value="{{ $detailtrash->idpengguna }}">
                                @if($detailtrash->statusPoin == 'Belum Diverifikasi')
                                    <button type="submit" class="btn btn-danger">
                                        Belum Diverifikasi
                                    </button>
                                @else
                                    <button type="submit" class="btn btn-success">
                                        Diverifikasi
                                    </button>
                                @endif
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection