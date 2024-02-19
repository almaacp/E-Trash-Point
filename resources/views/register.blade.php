@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 40rem;">
        <div class="card-body">
          <h2 class="card-title text-center">REGISTER</h2>
          <p class="card-text">
            <div class="row">
                <div class="col">
                    <form action="{{ url('/register') }}" method="post">
                        @csrf
            
                        <div class="mt-2">
                            <label class="form-label" for="">NAMA LENGKAP</label>
                            <input class="form-control" type="text" name="nama" id="">
                        </div>

                        <div class="mt-2">
                            <label class="form-label" for="">ALAMAT</label>
                            <input class="form-control" type="text" name="alamat" id="">
                        </div>

                        <div class="mt-2">
                            <label class="form-label" for="">NOMOR TELEPON</label>
                            <input class="form-control" type="text" name="telp" id="">
                        </div>

                        <div class="mt-2">
                            <label class="form-label" for="">JENIS KELAMIN</label>
                            <select class="form-select" name="jeniskelamin" id="">
                                <option>Male</option>
                                <option>Female</option>
                            </select>
                        </div>

                        <div class="mt-2">
                            <label class="form-label" for="">EMAIL</label>
                            <input class="form-control" type="email" name="email" id="">
                        </div>

                        <div class="mt-2">
                            <label class="form-label" for="">USERNAME</label>
                            <input class="form-control" type="text" name="username" id="">
                        </div>

                        <div class="mt-2">
                            <label class="form-label" for="password">PASSWORD</label>
                            <input class="form-control" type="password" name="password" id="password">
                            <input type="checkbox" onclick="togglePasswordVisibility()"> Show Password
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

                        <div class="mt-3 text-body-secondary">Have an account? <a href="{{ url('/login') }}" style="color: rgb(0, 185, 0)">Login</a></div>
                        
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