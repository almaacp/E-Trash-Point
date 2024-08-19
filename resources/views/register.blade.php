@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 40rem;">
        <div class="card-body animated-content">
            <p class="card-text">
                <h2 class="card-title text-center">REGISTER</h2>
                <div class="mt-2 text-body-secondary text-center">Have an account? <a href="{{ url('/login') }}" style="color: rgb(0, 185, 0)">Login</a></div>
                <div class="row">
                    <div class="col">
                        <form action="{{ url('/register') }}" method="post">
                            @csrf

                            <br><br>

                            <span class="text-danger">
                                @error('name')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <div class="form-floating">
                                    <input class="form-control" value="{{ old('name') }}" type="text" name="name" id="name" placeholder=" ">
                                    <label for="name">NAMA LENGKAP</label>
                                </div>
                            </div>
                            
                            <span class="text-danger">
                                @error('address')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                                <div class="form-floating">
                                    <input class="form-control" value="{{ old('address') }}" type="text" name="address" id="address" placeholder=" ">
                                    <label for="address">ALAMAT</label>
                                </div>
                            </div>

                            <span class="text-danger">
                                @error('phonenumber')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                <div class="form-floating">
                                    <input class="form-control" value="{{ old('phonenumber') }}" type="text" name="phonenumber" id="phonenumber" placeholder=" ">
                                    <label for="phonenumber">NOMOR TELEPON</label>
                                </div>
                            </div>

                            <span class="text-danger">
                                @error('gender')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-venus-mars"></i></span>
                                <div class="form-floating">
                                    <select class="form-select" name="gender" id="gender">
                                        <option selected disabled>Pilih Jenis Kelamin</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                    <label for="trashtype">JENIS KELAMIN</label>
                                </div>
                            </div>

                            <span class="text-danger">
                                @error('email')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                <div class="form-floating">
                                    <input class="form-control" value="{{ old('email') }}" type="email" name="email" id="email" placeholder=" ">
                                    <label for="email">EMAIL</label>
                                </div>
                            </div>

                            <span class="text-danger">
                                @error('username')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <div class="form-floating">
                                    <input class="form-control" value="{{ old('username') }}" type="text" name="username" id="username" placeholder=" ">
                                    <label for="username">USERNAME</label>
                                </div>
                            </div>

                            <span class="text-danger">
                                @error('password')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <div class="form-floating">
                                    <input class="form-control" type="password" name="password" id="password" placeholder=" ">
                                    <label for="password">PASSWORD</label>
                                </div>
                                <span class="input-group-text bg-white" onclick="togglePasswordVisibility('password', 'password-toggle')">
                                    <i id="password-toggle" class="fas fa-eye-slash"></i>
                                </span>
                            </div>

                            <span class="text-danger">
                                @error('password_confirmation')
                                    {{ $message }}
                                @enderror
                            </span>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <div class="form-floating">
                                    <input class="form-control" type="password" name="password_confirmation" id="password_confirmation" placeholder=" ">
                                    <label for="password_confirmation">KONFIRMASI PASSWORD</label>
                                </div>
                                <span class="input-group-text bg-white" onclick="togglePasswordVisibility('password_confirmation', 'password_confirmation-toggle')">
                                    <i id="password_confirmation-toggle" class="fas fa-eye-slash"></i>
                                </span>
                            </div>

                            <div class="mt-5 d-flex justify-content-between">
                                <a href="{{ url('/') }}" class="btn btn-secondary">BACK</a>
                                <button class="btn btn-success" type="submit">REGISTER</button>
                            </div>

                        </form>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>

@endsection
