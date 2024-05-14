@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 30rem;">
        <div class="card-body animated-content">
            <p class="card-text">
                <h2 class="card-title text-center mb-5">CHANGE PASSWORD</h2>
                <form action="{{ url('user/profile/changepassword') }}" method="POST">
                    @csrf

                    <div class="mt-2">
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <div class="form-floating">
                                <input class="form-control" type="password" name="current_password" id="current_password" placeholder=" ">
                                <label for="current_password">CURRENT PASSWORD</label>
                            </div>
                            <span class="input-group-text bg-white" onclick="togglePasswordVisibility('current_password', 'current_password-toggle')">
                                <i id="current_password-toggle" class="fas fa-eye-slash"></i>
                            </span>
                        </div>
                        <span class="text-danger">
                            @error('current_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mt-2">
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <div class="form-floating">
                                <input class="form-control" type="password" name="new_password" id="new_password" placeholder=" ">
                                <label for="new_password">NEW PASSWORD</label>
                            </div>
                            <span class="input-group-text bg-white" onclick="togglePasswordVisibility('new_password', 'new_password-toggle')">
                                <i id="new_password-toggle" class="fas fa-eye-slash"></i>
                            </span>
                        </div>
                        <span class="text-danger">
                            @error('new_password')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mt-2">
                        <div class="input-group mb-4">
                            <span class="input-group-text"><i class="fas fa-lock"></i></span>
                            <div class="form-floating">
                                <input class="form-control" type="password" name="new_password_confirmation" id="new_password_confirmation" placeholder=" ">
                                <label for="new_password_confirmation">CONFIRM NEW PASSWORD</label>
                            </div>
                            <span class="input-group-text bg-white" onclick="togglePasswordVisibility('new_password_confirmation', 'new_password_confirmation-toggle')">
                                <i id="new_password_confirmation-toggle" class="fas fa-eye-slash"></i>
                            </span>
                        </div>
                        <span class="text-danger">
                            @error('new_password_confirmation')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>

                    <div class="mt-5 d-flex justify-content-between">
                        <a href="{{ url('user/profile/edit') }}" class="btn btn-secondary">BACK</a>
                        <button type="submit" class="btn btn-success">CHANGE</button>
                    </div>
                </form>
            </p>
        </div>
    </div>
</div>

@if(session('error'))
    <script>
        alert('{{ session('error') }}');
    </script>
@endif
    
@endsection