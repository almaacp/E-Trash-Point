@extends('admin/admin')

@section('content')

<div class="container animated-content">
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="font-weight:bold; color: green">NEW TRASH</h1>
            <p class="mb-5 text-center" style="font-size: 15pt">Masukkan data trash terbaru</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="{{ url('/admin/infotrash') }}" method="post">
                @csrf

                <span class="text-danger">
                    @error('trashcode')
                    {{ $message }}
                    @enderror
                </span>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="fas fa-code"></i></span>
                    <div class="form-floating">
                        <input class="form-control form-control-sm" value="{{ old('trashcode') }}" type="text" name="trashcode" id="trashcode" placeholder=" ">
                        <label for="codetrash">KODE TRASH</label>
                    </div>
                </div>
                
                <span class="text-danger">
                    @error('locate')
                    {{ $message }}
                    @enderror
                </span>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                    <div class="form-floating">
                        <input class="form-control form-control-sm" value="{{ old('locate') }}" type="text" name="locate" id="locate" placeholder=" ">
                        <label for="locate">LOKASI</label>
                    </div>
                </div>
                
                <span class="text-danger">
                    @error('trashtype')
                        {{ $message }}
                    @enderror
                </span>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="fas fa-trash"></i></span>
                    <div class="form-floating">
                        <select class="form-select form-control-sm" name="trashtype" id="trashtype">
                            <option selected disabled>Pilih Jenis Trash</option>
                            <option>Gelas Plastik</option>
                            <option>Kaleng</option>
                            <option>Botol Plastik 60 mL</option>
                            <option>Botol Plastik 1 L</option>
                        </select>
                        <label for="trashtype">JENIS TRASH</label>
                    </div>
                </div>               

                <div class="mt-5 text-center">
                    <a href="{{ url('/admin/infotrash') }}" class="btn btn-secondary">BACK</a>
                    <button class="btn btn-success" style="margin-left: 20px" type="submit">ADD</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>

@endsection
