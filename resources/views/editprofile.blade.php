@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 40rem;">
        <div class="card-body animated-content">
            <p class="card-text">
                <h2 class="card-title text-center">EDIT PROFILE</h2>
                <div class="row">
                    <div class="col">
                        <form action="/user/profile" method="post">
                            @csrf
                        
                            <div class="mt-2">
                                <label class="form-label" for="">NAMA LENGKAP</label>
                                <input class="form-control" value="{{ session('name') }}" type="text" name="name" id="">
                                <span class="text-danger">
                                    @error('name')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="mt-2">
                                <label class="form-label" for="">JENIS KELAMIN</label>
                                <select class="form-select" name="gender" id="">
                                    <option {{ session('gender') == 'Male' ? 'selected' : '' }}>Male</option>
                                    <option {{ session('gender') == 'Female' ? 'selected' : '' }}>Female</option>
                                </select>
                            </div>

                            <div class="mt-2">
                                <label class="form-label" for="">ALAMAT</label>
                                <input class="form-control" value="{{ session('address') }}" type="text" name="address" id="">
                                <span class="text-danger">
                                    @error('address')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>
    
                            <div class="mt-2">
                                <label class="form-label" for="">NOMOR TELEPON</label>
                                <input class="form-control" value="{{ session('phonenumber') }}" type="text" name="phonenumber" id="">
                                <span class="text-danger">
                                    @error('phonenumber')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="mt-2">
                                <label class="form-label" for="">EMAIL</label>
                                <input class="form-control" value="{{ session('email') }}" type="email" name="email" id="">
                                <span class="text-danger">
                                    @error('email')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="mt-2">
                                <label class="form-label" for="">USERNAME</label>
                                <input class="form-control" value="{{ session('username') }}" type="text" name="username" id="">
                                <span class="text-danger">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="mt-2">
                                <label class="form-label" for="password">PASSWORD</label>
                                <input class="form-control" type="password" name="password" id="password">
                                <span class="text-danger">
                                    @error('password')
                                        {{ $message }}
                                    @enderror
                                </span>
                                <div class="row">
                                    <div class="col">
                                        <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password
                                    </div>
                                </div>
                            </div>
                            
                            <script>
                            function togglePasswordVisibility() {
                                var passwordInput = document.getElementById("password");
                                if (passwordInput.type === "password") {
                                    passwordInput.type = "text";
                                } else {
                                    passwordInput.type = "password";
                                }
                            }
                            </script>

                            <div class="mt-5 d-flex justify-content-between">
                                <a href="{{ url('/') }}" class="btn btn-secondary">BACK</a>
                                <button class="btn btn-success" type="submit">EDIT</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
          </p>
        </div>
    </div>
</div>
    
@endsection