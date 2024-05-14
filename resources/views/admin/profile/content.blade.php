@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 3rem; padding-right: 3rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">PROFILE USER</h1>
        </div>
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Username</th>
                    <th>Nama Lengkap</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Gender</th>
                    <th>Email</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penggunas as $pengguna)
                    <tr>
                        <td>{{ $pengguna->idpengguna }}</td>
                        <td>{{ $pengguna->usernamepengguna }}</td>
                        <td>{{ $pengguna->namapengguna }}</td>
                        <td>{{ $pengguna->alamatpengguna }}</td>
                        <td>{{ $pengguna->telppengguna }}</td>
                        <td>{{ $pengguna->jkpengguna }}</td>
                        <td>{{ $pengguna->emailpengguna }}</td>
                        <td>
                            <form action="{{ url('admin/profileuser/'.$pengguna->idpengguna) }}" method="post">
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
</div>

@endsection