@extends('admin/admin')

@section('content')

<div class="animated-content">
    <h1 class="text-center">ADMIN DASHBOARD</h1><br><br>
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h4 class="card-title">INFO TRASH</h4>
                  <p class="card-text">Update cabang tempat sampah E-Trash Point</p>
                  <a href="/admin/infotrash" class="btn btn-success btn-home">UPDATE</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h4 class="card-title">KATALOG HADIAH</h4>
                  <p class="card-text">Update katalog hadiah dari E-Trash Point</p>
                  <a href="/admin/kataloghadiah" class="btn btn-success btn-home">UPDATE</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h4 class="card-title">KONTER</h4>
                  <p class="card-text">Update cabang konter E-Trash Point</p>
                  <a href="/admin/konter" class="btn btn-success btn-home">UPDATE</a>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>

    <div class="row mt-5">
        <div class="col"></div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h4 class="card-title">POIN BUANG SAMPAH</h4>
                  <p class="card-text">Verifikasi poin user saat membuang sampah di E-Trash Point</p>
                  <a href="/admin/historibuangsampah" class="btn btn-success">UPDATE</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h4 class="card-title">KLAIM HADIAH</h4>
                  <p class="card-text">Update terkait klaim hadiah dari E-Trash Point</p>
                  <a href="/admin/klaimhadiah" class="btn btn-success">UPDATE</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                  <h4 class="card-title">PROFILE USER</h4>
                  <p class="card-text">Manage data user E-Trash Point</p>
                  <a href="/admin/profileuser" class="btn btn-success btn-home">UPDATE</a>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>

@endsection