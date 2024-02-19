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
                    
                    <ul class="navbar-nav gap-3">
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">MENU</button>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="">Info Trash</a></li>
                                        <li><a class="dropdown-item" href="">Katalog Hadiah</a></li>
                                    </ul>
                            </div>
                        </li>
                        
                        @if(!request()->is('login','register')) <!-- Memeriksa apakah URL saat ini bukan '/login' dan /register -->
                            <li class="nav-item">
                                <a href="{{ url('login') }}">
                                    <button type="button" class="btn btn-success">LOGIN</button>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('register') }}">
                                    <button type="button" class="btn btn-secondary">REGISTER</button>
                                </a>
                            </li>
                        @endif
                        
                    </ul>

                    <a href="/"><img style="width: 300px" src="{{ asset('gambar/logo-judul-removebg.png') }}" alt=""></a>

                </div>
            </nav>
        </div>

        <div class="row mt-5">
            @yield('content')
        </div>

        <div class="mt-5">
            <nav class="navbar navbar-expand-lg">
                <div style="color: white; font-size: 18px" class="container-fluid">
                    Contact us: etrashpoint@mail.com
                    <img style="width: 150px" src="{{ asset('gambar/A&B-project.png') }}" alt="">
                </div>
            </nav>
        </div>
        
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>