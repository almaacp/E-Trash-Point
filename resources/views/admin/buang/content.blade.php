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
            <tbody>
                <tr>
                    <td>1</td>
                    <td>bkausalya</td>
                    <td>G-001</td>
                    <td>20/2/2024</td>
                    <td>30</td>
                    <td><button id="verifButton" class="btn btn-outline-danger" onclick="verif(this)">Belum Diverifikasi</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>bkausalya</td>
                    <td>G-001</td>
                    <td>20/2/2024</td>
                    <td>30</td>
                    <td><button id="verifButton" class="btn btn-outline-danger" onclick="verif(this)">Belum Diverifikasi</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>bkausalya</td>
                    <td>G-001</td>
                    <td>20/2/2024</td>
                    <td>30</td>
                    <td><button id="verifButton" class="btn btn-outline-danger" onclick="verif(this)">Belum Diverifikasi</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>almaalya</td>
                    <td>G-001</td>
                    <td>20/2/2024</td>
                    <td>30</td>
                    <td><button id="verifButton" class="btn btn-outline-danger" onclick="verif(this)">Belum Diverifikasi</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>almaalya</td>
                    <td>G-001</td>
                    <td>20/2/2024</td>
                    <td>30</td>
                    <td><button id="verifButton" class="btn btn-outline-danger" onclick="verif(this)">Belum Diverifikasi</button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>almaalya</td>
                    <td>G-001</td>
                    <td>20/2/2024</td>
                    <td>30</td>
                    <td><button id="verifButton" class="btn btn-outline-danger" onclick="verif(this)">Belum Diverifikasi</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection