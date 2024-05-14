@extends('admin/admin')

@section('content')

<div class="container animated-content">
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="font-weight:bold; color: green">UPDATE KONTER</h1>
            <p class="mb-5 text-center" style="font-size: 15pt">Update lokasi cabang konter</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="{{ url('/admin/konter/'.$konters->first()->idKonter) }}" method="post">
                @csrf
                @method('PUT')
                
                <span class="text-danger">
                    @error('locate')
                    {{ $message }}
                    @enderror
                </span>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="form-floating">
                        <input class="form-control form-control-sm" value="{{ $konters->first()->lokasiKonter }}" type="text" name="locate" id="locate" placeholder=" ">
                        <label for="locate">LOKASI KONTER</label>
                    </div>
                </div>              

                <div class="mt-5 text-center">
                    <a href="{{ url('/admin/konter') }}" class="btn btn-secondary">BACK</a>
                    <button class="btn btn-success" style="margin-left: 20px" type="submit">UPDATE</button>
                </div>
            </form>
        </div>
    </div>
    <br><br><br><br><br><br><br>
</div>

@endsection
