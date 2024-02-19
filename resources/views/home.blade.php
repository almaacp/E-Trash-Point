@extends('front')

@section('content')
<div class="row">
    <div style="width: 10rem"></div>
    <div class="mt-4 col-1">
        <img style="width: 300px" src="{{ asset('gambar/logo-ori-removebg.png') }}" alt="">
    </div>
    <div style="width: 16rem"></div>
    <div class="mt-4 col-5">
        <h1 class="bold-text" style="font-size: 70px; margin-left: 2rem; color: greenyellow">ABOUT US</h1><hr style="color: white">
        <p class="mt-4" style="font-size: 21px; margin-left: 2rem; color: white">
            <a style="color: greenyellow">E-Trash Point </a>adalah aplikasi berbasis web yang memungkinkan pengguna untuk menukarkan sampah dengan poin. Setelah poin terkumpul, pengguna dapat menukarkannya dengan hadiah yang telah tersedia. <br><br>Fitur utamanya meliputi pengumpulan sampah, penukaran dengan poin, pilihan hadiah menarik, pemantauan progres, dan edukasi lingkungan. Dengan aplikasi ini, pengguna tidak hanya berkontribusi pada pelestarian lingkungan, tetapi juga mendapatkan apresiasi melalui hadiah-hadiah yang ditawarkan.
        </p>
    </div>
</div>

<div class="mt-4"></div>

<div class="row mt-5">
    <div class="col-2"></div>
    <div class="col-3">
        <img style="width: 300px" src="{{ asset('gambar/sdgs.png') }}" alt="">
        <p style="color: white">Image source: <a style="color: skyblue" href="https://jatimudo-rembang.desa.id/artikel/2021/4/29/sdgs-perlu-gak-sih" target="_blank">https://jatimudo-rembang.desa.id/artikel/2021/4/29/sdgs-perlu-gak-sih</a></p>
        <p></p>
    </div>
    <div class="col-5">
        <h1 class="bold-text" style="font-size: 50px; margin-left: 2rem; color:gold">TARGET SDGs</h1><hr style="color: black">
        <p class="mt-4" style="font-size: 21px; margin-left: 2rem; color: white">
            E-Trash Point sendiri merupakan perwujudan dari SDGs atau Sustainable Development Goals
            nomor 3 (<a href="https://sdgs.bappenas.go.id/17-goals/goal-3/" target="_blank" style="color: gold">Good Health and Well-Being</a>),
            nomor 14 (<a href="https://sdgs.bappenas.go.id/17-goals/goal-14/" target="_blank" style="color: gold">Life Below Water</a>), dan 
            nomor 15 (<a href="https://sdgs.bappenas.go.id/17-goals/goal-15/" target="_blank" style="color: gold">Life On Land</a>). 
            Dengan adanya E-Trash Point, besar harapan kami agar masyarakat selalu membuang sampah pada tempatnya supaya ekosistem senantiasa terjaga.
        </p>
    </div>
</div>

@endsection