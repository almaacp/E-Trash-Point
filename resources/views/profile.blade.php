@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 40rem;">
        <div class="card-body animated-content">
            <p class="card-text">
                <h1 class="card-title text-center" style="color: green">
                    <i class="fas fa-user-circle" style="font-size: 2em;"></i>
                </h1>                
                <h1 class="card-title text-center" style="color: green; font-weight:bold">
                    PROFILE
                </h1>
                <div class="row">
                    <div class="col">
                        <a href="{{ url('user/profile/edit') }}" style="color: green">
                            <p class="text-body-secondary text-center">
                                <i class="fas fa-edit"></i> Edit Profile
                            </p>
                        </a>
                        <br><h5 class="profile">NAMA LENGKAP</h5>
                        <p class="profile">{{ session('idpengguna')['name'] }}</p>
                        <br><h5 class="profile">USERNAME</h5>
                        <p class="profile">{{ session('idpengguna')['username'] }}</p>
                        <br><h5 class="profile">JENIS KELAMIN</h5>
                        <p class="profile">{{ session('idpengguna')['gender'] }}</p>
                        <br><h5 class="profile">ALAMAT</h5>
                        <p class="profile">{{ session('idpengguna')['address'] }}</p>
                        <br><h5 class="profile">NOMOR TELEPON</h5>
                        <p class="profile">{{ session('idpengguna')['phonenumber'] }}</p>
                        <br><h5 class="profile">EMAIL</h5>
                        <p class="profile">{{ session('idpengguna')['email'] }}</p>
                    </div>
                </div>
            </div>
          </p>
        </div>
    </div>
</div>
    
@endsection