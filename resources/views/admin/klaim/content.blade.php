@extends('admin/admin')

@section('content')

<div class="container animated-content" style="padding-left: 3rem; padding-right: 3rem">
    <div class="row justify-content-between">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green">KLAIM HADIAH</h1>
        </div>
    </div>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Tanggal Klaim</th>
                    <th>Nama Hadiah</th>
                    <th>Poin</th>
                    <th>Voucher</th>
                    <th>Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>almaalya</td>
                    <td>20/2/2024</td>
                    <td>Notebook</td>
                    <td>30</td>
                    <td><a href="/user/klaimhadiah/voucher" style="color: green"><i class="fas fa-ticket-alt"></i></a></td>
                    <td><button id="claimButton" class="btn btn-danger" disabled>Kadaluarsa</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>almaalya</td>
                    <td>20/2/2024</td>
                    <td>Notebook</td>
                    <td>30</td>
                    <td><a href="/user/klaimhadiah/voucher" style="color: green"><i class="fas fa-ticket-alt"></i></a></td>
                    <td><button id="claimButton" class="btn btn-danger" disabled>Kadaluarsa</button></td>
                </tr>
                <tr>
                    <td>3</td>
                    <td>almaalya</td>
                    <td>20/2/2024</td>
                    <td>Notebook</td>
                    <td>30</td>
                    <td><a href="/user/klaimhadiah/voucher" style="color: green"><i class="fas fa-ticket-alt"></i></a></td>
                    <td><button id="claimButton" class="btn btn-outline-danger" onclick="claimGift(this)">Belum Diambil</button></td>
                </tr>
                <tr>
                    <td>4</td>
                    <td>bkausalya</td>
                    <td>20/2/2024</td>
                    <td>Notebook</td>
                    <td>30</td>
                    <td><a href="/user/klaimhadiah/voucher" style="color: green"><i class="fas fa-ticket-alt"></i></a></td>
                    <td><button id="claimButton" class="btn btn-outline-danger" onclick="claimGift(this)">Belum Diambil</button></td>
                </tr>
                <tr>
                    <td>5</td>
                    <td>bkausalya</td>
                    <td>20/2/2024</td>
                    <td>Notebook</td>
                    <td>30</td>
                    <td><a href="/user/klaimhadiah/voucher" style="color: green"><i class="fas fa-ticket-alt"></i></a></td>
                    <td><button id="claimButton" class="btn btn-outline-danger" onclick="claimGift(this)">Belum Diambil</button></td>
                </tr>
                <tr>
                    <td>6</td>
                    <td>bkausalya</td>
                    <td>20/2/2024</td>
                    <td>Notebook</td>
                    <td>30</td>
                    <td><a href="/user/klaimhadiah/voucher" style="color: green"><i class="fas fa-ticket-alt"></i></a></td>
                    <td><button id="claimButton" class="btn btn-outline-danger" onclick="claimGift(this)">Belum Diambil</button></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>

@endsection