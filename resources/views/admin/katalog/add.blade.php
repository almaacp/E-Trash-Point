@extends('admin/admin')

@section('content')

<div class="container animated-content">
    <div class="row">
        <div class="col">
            <h1 class="text-center" style="font-weight:bold; color: green">NEW GIFT</h1>
            <p class="mb-5 text-center" style="font-size: 15pt">Masukkan data hadiah terbaru</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6 mx-auto">
            <form action="{{ url('/admin/kataloghadiah') }}" method="post">
                @csrf

                <span class="text-danger">
                    @error('giftname')
                    {{ $message }}
                    @enderror
                </span>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="fas fa-gift"></i></span>
                    <div class="form-floating">
                        <input class="form-control form-control-sm" value="{{ old('giftname') }}" type="text" name="giftname" id="giftname" placeholder=" ">
                        <label for="giftname">NAMA HADIAH</label>
                    </div>
                </div>
                
                <span class="text-danger">
                    @error('giftpoint')
                    {{ $message }}
                    @enderror
                </span>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="fas fa-coins"></i></span>
                    <div class="form-floating">
                        <input class="form-control form-control-sm" value="{{ old('giftpoint') }}" type="number" name="giftpoint" id="giftpoint" placeholder=" ">
                        <label for="giftpoint">POIN HADIAH</label>
                    </div>
                </div>

                <span class="text-danger">
                    @error('giftimage')
                    {{ $message }}
                    @enderror
                </span>
                <div class="input-group mb-4">
                    <span class="input-group-text"><i class="fas fa-image"></i></span>
                    <div class="form-floating">
                        <input class="form-control form-control-sm" value="{{ old('giftimage') }}" type="file" name="giftimage" id="giftimage" placeholder=" " accept="image/*">
                        <label for="giftimage">GAMBAR HADIAH</label>
                    </div>
                </div>

                <div class="mt-5 text-center">
                    <a href="{{ url('/admin/kataloghadiah') }}" class="btn btn-secondary">BACK</a>
                    <button class="btn btn-success" style="margin-left: 20px" type="submit">ADD</button>
                </div>
            </form>
        </div>
    </div>
    <br>
</div>

@endsection
