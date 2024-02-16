<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Trash Point</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap">
    <style>
        body {
            font-family: 'Fredoka', sans-serif;
            background-image: url({{ asset('gambar/background.png') }});
            background-repeat: no-repeat;
            background-position: center center;
            background-attachment: fixed;
            background-size: cover;
        }
        .bold-text {
            font-weight: bold;
        }
    </style>            
</head>

<body>
    <div class="container-fluid">
        <div>
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    <a href=""><img style="width: 300px" src="{{ asset('gambar/logo-judul-removebg.png') }}" alt=""></a>
                    <ul class="navbar-nav gap-3">

                        <li class="nav-item">
                            <a href="">
                                <button type="button" class="btn btn-success">LOGIN</button>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="">
                                <button type="button" class="btn btn-secondary">REGISTER</button>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <div class="row mt-5">
            <div class="col-2 mt-2">
                <ul class="list-group">
                    <a href="" class="list-group-item list-group-item-action list-group-item-success">INFO TRASH</a>
                    <a href="" class="list-group-item list-group-item-action list-group-item-success">KATALOG HADIAH</a>
                </ul>
            </div>
            <div class="col-5">
                <h1 class="bold-text" style="font-size: 50px; margin-left: 2rem; color: greenyellow">ABOUT US</h1><hr style="color: white">
                <p class="mt-4" style="font-size: 21px; margin-left: 2rem; color: white">
                <a style="color: greenyellow">E-Trash Point </a>adalah aplikasi berbasis web yang memungkinkan pengguna untuk menukarkan sampah dengan poin. Pengguna yang telah mengumpulkan poin, dapat ditukarkan dengan hadiah yang telah tersedia. <br><br>Fitur utamanya meliputi pengumpulan sampah, penukaran dengan poin, pilihan hadiah menarik, pemantauan progres, dan edukasi lingkungan. Dengan aplikasi ini, pengguna tidak hanya berkontribusi pada pelestarian lingkungan, tetapi juga mendapatkan apresiasi melalui hadiah-hadiah yang ditawarkan.
                </p>
            </div>
            <div class="col-2"></div>
            <div class="col-3">
                <img style="width: 300px" src="{{ asset('gambar/logo-ori-removebg.png') }}" alt="">
            </div>
        </div>
        <div class="mt-5">
            <nav class="navbar navbar-expand-lg">
                <div style="color: white" class="container-fluid">
                    Contact us: etrashpoint@mail.com
                    <img style="width: 150px" src="{{ asset('gambar/A&B-project.png') }}" alt="">
                </div>
            </nav>
        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>