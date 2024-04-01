@extends('admin/admin')

@section('content')

<style>
    .card-img-top {
        size: 512px
    }
    .card-text {
        font-size: 18px
    }
</style>

<div class="container animated-content" style="padding-left: 8rem; padding-right: 5rem">
    <div class="row justify-content-between" style="margin-right: 4rem">
        <div class="col">
            <h1 class="bold-text" style="font-size: 50px; color: green;">KATALOG HADIAH</h1>
        </div>
        <div class="mt-1 col-auto">
            <a href="kataloghadiah/add" type="button" class="btn btn-outline-success" style="font-size: 18px">+ ADD</a>
        </div>
    </div>
    <div class="mt-5 row">
        <div class="col">
            <div class="card text-bg-success mb-3" style="width: 18rem;">
                <img src="{{ asset('gambar/kaos.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h2 class="card-title">KAOS</h2>
                    <p class="card-text">100 poin</p>
                    <p class="card-text">Stok: 200 pcs</p>
                    <a href="kataloghadiah/update" class="btn btn-light">UPDATE</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-bg-success mb-3" style="width: 18rem;">
                <img src="{{ asset('gambar/notebook.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h2 class="card-title">NOTEBOOK</h2>
                    <p class="card-text">30 poin</p>
                    <p class="card-text">Stok: 200 pcs</p>
                    <a href="kataloghadiah/update" class="btn btn-light">UPDATE</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card text-bg-success mb-3" style="width: 18rem;">
                <img src="{{ asset('gambar/totebag.png') }}" class="card-img-top" alt="">
                <div class="card-body">
                    <h2 class="card-title">TOTEBAG</h2>
                    <p class="card-text">50 poin</p>
                    <p class="card-text">Stok: 200 pcs</p>
                    <a href="kataloghadiah/update" class="btn btn-light">UPDATE</a>
                </div>
            </div>
        </div>
    </div>

    <br><br>
    <a href="" type="button" class="btn btn-danger" style="font-size: 18px">DELETE ALL</a>

</div>   

@endsection