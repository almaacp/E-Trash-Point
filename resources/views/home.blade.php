@extends('front')

@section('content')

<!--E-Trash Point Project finally done!-->

<section id="about-us" class="animated-content">
    <div class="row animated-content">
        <div class="row">
            <div style="width: 10rem"></div>
            <div class="mt-2 col-1">
                <img style="width: 300px" src="{{ asset('gambar/logo-ori-removebg.png') }}" alt="">
            </div>
            <div style="width: 16rem"></div>
            <div class="mt-2 col-5">
                <h1 class="bold-text" style="font-size: 70px; margin-left: 2rem; color: greenyellow">ABOUT US</h1><hr style="color: white">
                <p class="mt-4" style="font-size: 21px; margin-left: 2rem; color: white">
                    <a style="color: greenyellow">E-Trash Point </a>adalah aplikasi berbasis web dan mobile yang memungkinkan pengguna untuk menukarkan sampah dengan poin, hal ini memenuhi beberapa goal dari <a href="#sdgs" style="color:white">SDGs</a>.
                    Saat ini, <a style="color: greenyellow">E-Trash Point </a>hanya menerima beberapa <a style="color: white" href="#kategori">kategori sampah</a>, dan tentunya akan terus mengalami perkembangan. 
                    Jika poin telah terkumpul banyak, pengguna dapat menukarkannya dengan hadiah yang telah tersedia. 
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="Component5 btn" style="height: 25%; position: relative; display: flex; justify-content: center; align-items: center; margin-top: 30px; margin-bottom: 80px">
                    <div class="Rectangle16" style="width: 200px; height: 53px; background: greenyellow; border-radius: 100px; position: absolute;"></div>
                    <a href="@if (request()->is('/'))
                        login
                    @else
                        user/historibuangsampah
                    @endif" class="GetStarted" style="text-decoration: none; color: black; font-size: 18px; font-weight: bold; word-wrap: break-word; position: absolute;">GET STARTED →</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="kategori" class="animated-content">
    
    <div class="row">
        <div class="mt-1 row">
            <h1 class="text-center" style="font-weight: bolder; font-size: 50px">KATEGORI SAMPAH E-TRASH POINT</h1>
            <p class="text-center" style="font-size: 20px">Klik salah satu gambar di bawah ini untuk mengetahui informasi lebih lanjut terkait setiap kategori sampah</p>
        </div>
        <br>
    </div>

    <div class="row justify-content-center mt-4 animated-content">
        <div class="col-auto">
            <button type="button" class="btn btn-outline-light mx-1" style="border: none;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0">
                <img src="{{ asset('gambar/gelas.png') }}" alt="Slide 1" style="width: 70px;">
            </button>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-outline-light mx-1" style="border: none;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1">
                <img src="{{ asset('gambar/kaleng.png') }}" alt="Slide 2" style="width: 80px;">
            </button>
        </div>
        <div class="col-auto">
            <button type="button" class="btn btn-outline-light mx-1" style="border: none;" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2">
                <img src="{{ asset('gambar/botol.png') }}" alt="Slide 3" style="width: 60px;">
            </button>
        </div>
    </div>
    
    <div id="carouselExampleIndicators" class="carousel slide animated-content" data-bs-ride="carousel">
    
        <div class="carousel-inner">
    
            <style>
                .card {
                    background-color: rgba(0, 0, 0, 0.1);
                }
                .card-header {
                    background-color: rgba(0, 128, 0, 0.2);
                }
                .card-title {
                    color: black;
                    font-weight: bold;
                }
                .btn-outline-light:hover {
                    background-color: transparent;
        }
            </style>
    
            <br><br>
            
            <div class="carousel-item active">
                <div class="card mx-auto" style="width: 50rem;">
                    <div class="card-header">
                        <h2 class="card-title text-center">GELAS PLASTIK</h2>
                    </div>
                    <br>
                    <img src="{{ asset('gambar/gelas.png') }}" class="mt-3 card-img-top mx-auto" style="width: 300px" alt="">
                    <br>
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size: 20px;">Adalah wadah praktis yang sering digunakan untuk kemasan minuman. Meskipun praktis, gelas plastik sulit terurai, hingga menyebabkan penumpukan sampah yang mencemari lingkungan dan merusak ekosistem. Selain itu, zat-zat berbahaya dalam plastik dapat terlepas dan berpotensi membahayakan kesehatan manusia.</p>
                    </div>
                </div>
            </div>        
    
            <div class="carousel-item">
                <div class="card mx-auto" style="width: 50rem;">
                    <div class="card-header">
                        <h2 class="card-title text-center">KALENG</h2>
                    </div>
                    <br>
                    <img src="{{ asset('gambar/kaleng.png') }}" class="mt-3 card-img-top mx-auto" style="width: 350px" alt="">
                    <br>
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size: 20px;">Adalah wadah logam yang umumnya digunakan untuk menyimpan minuman, makanan, atau bahan lainnya yang terdiri dari bahan tahan korosi seperti aluminium atau baja timah. Namun, kaleng cenderung memakan waktu yang lama untuk terurai di alam.</p>
                    </div>
                </div>
            </div>
    
            <div class="carousel-item">
                <div class="card mx-auto" style="width: 50rem;">
                    <div class="card-header">
                        <h2 class="card-title text-center">BOTOL PLASTIK</h2>
                    </div>
                    <br>
                    <img src="{{ asset('gambar/botol.png') }}" class="mt-3 card-img-top mx-auto" style="width: 250px" alt="">
                    <br>
                    <div class="card-body">
                        <p class="card-text text-center" style="font-size: 20px;">Adalah salah satu produk plastik yang paling umum digunakan untuk kemasan minuman. Meskipun praktis, botol plastik sering kali menjadi penyumbang utama sampah plastik di darat dan di laut, karena sulit terurai serta memerlukan waktu yang sangat lama untuk membusuk hingga menyebabkan pencemaran lingkungan yang berkelanjutan.</p>
                    </div>
                </div>
            </div>
    
        </div>
    
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        
    </div>

</section>

<section id="sdgs" class="animated-content">
    <div class="row">
        <div style="width: 15rem"></div>
        <div class="mt-2 col-1">
            <img class="mt-3" style="width: 180px" src="{{ asset('gambar/sdgs12.png') }}" alt="">
            <img class="mt-3" style="width: 180px" src="{{ asset('gambar/sdgs1.png') }}" alt="">
            <img class="mt-3" style="width: 180px" src="{{ asset('gambar/sdgs13.png') }}" alt="">
            <img class="mt-3" style="width: 180px" src="{{ asset('gambar/sdgs3.png') }}" alt="">
        </div>
        <div style="width: 8rem"></div>
        <div class="mt-2 col-5">
            <h1 class="bold-text" style="font-size: 50px; margin-left: 2rem;">Sustainable Development Goals (SDGS)</h1>
            <hr style="color: white">
            <p class="mt-4" style="font-size: 21px; margin-left: 2rem;">
                Keterkaitan membuang sampah dengan SDGs sangatlah penting. Salah satu tujuan SDGS yang relevan adalah Goal 12 (Responsible Consumption and Production). Dengan mengurangi, mendaur ulang, dan mengelola limbah secara efisien, kita dapat membantu mencapai tujuan ini. Selain itu, pengelolaan sampah yang baik juga dapat berdampak positif pada tujuan-tujuan SDGS lainnya, seperti Goal 1 (No Poverty), Goal 13 (Climate Action), dan Goal 3 (Good Health and Well-Being).
                <br><br>
                Dengan menggunakan E-Trash Point, pengguna tidak hanya dapat membersihkan lingkungan dengan membuang sampah secara tepat, tetapi juga ikut serta dalam mencapai tujuan pembangunan berkelanjutan global yang diatur oleh SDGS.
            </p>
        </div>            
    </div>
</section>

@endsection