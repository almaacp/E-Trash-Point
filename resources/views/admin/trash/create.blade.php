@extends('admin/admin')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <h2>REGISTER</h2>
    <form action="{{ url('/admin/trash') }}" method="post">
        @csrf

        <br><br>
        <div class="input-group mb-4">
            <span class="input-group-text"><i class="fas fa-user"></i></span>
            <div class="form-floating">
            <input class="form-control" value="{{ old('name') }}" type="text" name="name" id="name" placeholder=" ">
            <label for="name">NAMA LENGKAP</label>
        </div>
        <span class="text-danger">
            @error('name')
            {{ $message }}
            @enderror
        </span>

        <div class="mt-5 d-flex justify-content-between">
            <a href="{{ url('/') }}" class="btn btn-secondary">BACK</a>
            <button class="btn btn-success" type="submit">REGISTER</button>
        </div>
    </form>
</div>
    
@endsection