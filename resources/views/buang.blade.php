@extends('front')

@section('content')

<div class="d-flex justify-content-center align-items-center">
    <div class="card" style="width: 28rem;">
        <div class="card-body animated-content">
            <h2 class="card-title text-center">BUANG SAMPAH</h2>
            <div class="row"> 
                <div class="col">
                    <form id="trashForm" action="{{ url('/user/historibuangsampah') }}" method="post">
                        @csrf
                        <div class="mt-4">
                            <label class="form-label" style="font-size: 17px" for="trashcode">Pilih kode trash untuk membuka tempat sampah</label>
                            <select class="form-select" name="trashcode" id="trashcode">
                                <option value="" disabled selected>Pilih Kode Trash</option>
                                @foreach ($trashes as $trash)
                                    <option value="{{ $trash->idTrash }}">{{ $trash->idTrash }}</option>
                                @endforeach                                    
                            </select>
                            <span class="text-danger">
                                @error('trashcode')
                                    {{ $message }}
                                @enderror
                            </span>
                        </div>
                        
                        <div class="mt-4">
                            <label class="form-label" style="font-size: 17px" for="trashAmount">Jumlah Sampah</label>
                            <input type="number" class="form-control" name="trashAmount" id="trashAmount">
                        </div>
                        <span class="text-danger">
                            @error('trashAmount')
                                {{ $message }}
                            @enderror
                        </span>
                    
                        <div class="mt-5 text-body-secondary">Kode trash dapat dilihat di <a href="{{ url('/user/infotrash') }}" style="color: rgb(0, 185, 0)">Info Trash</a></div>
                        
                        <div class="mt-5 d-flex justify-content-between align-items-center"> 
                            <div>
                                <a id="backButton" href="{{ url('/user/historibuangsampah') }}" class="btn btn-secondary">BACK</a>
                            </div>
                            <div>
                                <button class="btn btn-success">OPEN</button>
                            </div>
                        </div>    
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div><br><br></div>

@endsection