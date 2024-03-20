@extends('admin/admin')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 25rem;">
        <div class="card-body animated-content">
            <p class="card-text">
                <h2 class="card-title text-center">LOGIN</h2>
                <div class="mt-2 text-body-secondary text-center">Masukkan username pegawai yang telah terdaftar</div>
                <div class="row">
                    <div class="col">
                        <form action="admin/infotrash" method="post">
                            @csrf

                            <br><br>
                            <div class="input-group mb-4">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                                <div class="form-floating">
                                    <input type="text" class="form-control" value="{{ old('username') }}" id="" placeholder="username" name="username">
                                    <label for="">USERNAME</label>
                                </div>
                                <span class="text-danger">
                                    @error('username')
                                        {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="input-group mb-2">
                                <span class="input-group-text"><i class="fas fa-lock"></i></span>
                                <div class="form-floating">
                                    <input type="password" class="form-control" id="password" placeholder="password" name="password">
                                    <label for="">PASSWORD</label>
                                </div>
                                <span class="input-group-text bg-white" onclick="togglePasswordVisibility()">
                                    <i id="password-toggle" class="fas fa-eye-slash"></i>
                                </span>
                            </div>
                            
                            <br>
                            <div class="mt-3 d-flex justify-content-between">
                                <button class="btn btn-success" type="submit">LOGIN</button>
                            </div>
                        </form>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>
<div class="mt-4"></div>

<script>
    function togglePasswordVisibility() {
        var passwordInput = document.getElementById("password");
        var passwordToggle = document.getElementById("password-toggle");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.classList.remove("fa-eye-slash");
            passwordToggle.classList.add("fa-eye");
        } else {
            passwordInput.type = "password";
            passwordToggle.classList.remove("fa-eye");
            passwordToggle.classList.add("fa-eye-slash");
        }
    }
</script>

@endsection