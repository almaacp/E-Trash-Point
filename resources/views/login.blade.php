@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 25rem;">
        <div class="card-body">
            <p class="card-text">
                <h2 class="card-title text-center">LOGIN</h2>
                <div class="row">
                    <div class="col">
                        <form action="{{ url('/login') }}" method="post">
                            @csrf
            
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

                            <div class="mt-3 text-body-secondary">Don't have an account? <a href="{{ url('/register') }}" style="color: rgb(0, 185, 0)">Register</a></div>
                            
                            <div class="mt-5 d-flex justify-content-between">
                                <a href="{{ url('/') }}" class="btn btn-secondary">BACK</a>
                                <button class="btn btn-success" type="submit">LOGIN</button>
                            </div>
                            
                        </form>
                    </div>
                </div>
            </p>
        </div>
    </div>
</div>
<div class="mt-3"></div>

@endsection