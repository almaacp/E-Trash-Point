@extends('admin/admin')

@section('content')

<div class="container animated-content">
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="font-weight:bold; color: green">UPDATE TRASH</h1>
            <p class="mb-5 text-center" style="font-size: 15pt">Update data trash</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="{{ url('/admin/infotrash') }}" method="put">
                @csrf

                <span class="text-danger">
                    @error('locate')
                        {{ $message }}
                    @enderror
                </span>
                <div class="mt-2">
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-map-marker-alt"></i></span>
                        <div class="form-floating">
                            <input class="form-control" value="Jl. Tunjungan no 46" type="text" name="locate" id="locate" placeholder=" ">
                            <label for="locate">LOKASI</label>
                        </div>
                    </div>
                </div>
            
                <div class="mt-2">
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-trash"></i></span>
                        <div class="form-floating">
                            <select class="form-select" name="trashtype" id="trashtype">
                                <option {{ session('trashtype') == 'Gelas Plastik' ? 'selected' : '' }}>Gelas Plastik</option>
                                <option {{ session('trashtype') == 'Kaleng' ? 'selected' : '' }}>Kaleng</option>
                                <option {{ session('trashtype') == 'Botol Plastik 60 mL' ? 'selected' : '' }}>Botol Plastik 60 mL</option>
                                <option {{ session('trashtype') == 'Botol Plastik 1 L' ? 'selected' : '' }}>Botol Plastik 1 L</option>
                            </select>
                            <label for="trashtype">JENIS TRASH</label>
                        </div>
                    </div>
                </div>
            
                <div class="mt-2">
                    <div class="input-group mb-4">
                        <span class="input-group-text"><i class="fas fa-check-circle"></i></span>
                        <div class="form-floating">
                            <select class="form-select" name="trashstatus" id="trashstatus">
                                <option {{ session('trashstatus') == 'Aktif' ? 'selected' : '' }}>Aktif</option>
                                <option {{ session('trashstatus') == 'Maintenance' ? 'selected' : '' }}>Maintenance</option>
                            </select>
                            <label for="trashstatus">STATUS TRASH</label>
                        </div>
                    </div>
                </div>
            

                <div class="mt-5 text-center">
                    <a href="{{ url('admin/infotrash') }}" class="btn btn-secondary">BACK</a>
                    <button class="btn btn-success" style="margin-left: 20px" type="submit">UPDATE</button>
                </div>
            
            </form>
        </div>
    </div>
</div>
    
@endsection