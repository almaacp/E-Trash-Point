<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Trash Point</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>

<body class="@if (request()->is('/','login','register','user','user/buangsampah','user/profile','user/profile/edit','user/profile/edit/password','user/klaimhadiah/voucher','user/notifikasi'))
    home
    @endif">
    <div class="container-fluid">
        <div>
            <nav class="navbar navbar-expand-lg" 
            @if (!request()->is('/','login','register','user','user/buangsampah','user/profile','user/profile/edit','user/profile/edit/password','user/klaimhadiah/voucher','user/notifikasi'))
                style="background-color: rgba(210, 240, 230, 0.75)"
            @endif>
                <div class="container-fluid">
                    
                    <ul class="navbar-nav gap-2">
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px">MENU</button>
                                <ul class="dropdown-menu">
                                    @if (session()->missing('idpengguna'))
                                    <li><a class="dropdown-item" href="/infotrash"><i class="fas fa-trash"></i> Info Trash</a></li>
                                    <li><a class="dropdown-item" href="/kataloghadiah"><i class="fas fa-gift"></i> Katalog Hadiah</a></li>
                                    <li><a class="dropdown-item" href="/konter"><i class="fas fa-store"></i> Konter</a></li>
                                    @else
                                    <li><a class="dropdown-item" href="/user/infotrash"><i class="fas fa-trash"></i> Info Trash</a></li>
                                    <li><a class="dropdown-item" href="/user/kataloghadiah"><i class="fas fa-gift"></i> Katalog Hadiah</a></li>
                                    <li><a class="dropdown-item" href="/user/konter"><i class="fas fa-store"></i> Konter</a></li>
                                    <li><a class="dropdown-item" href="/user/historibuangsampah"><i class="fas fa-history"></i> Histori Buang Sampah</a></li>
                                    <li><a class="dropdown-item" href="/user/klaimhadiah"><i class="fas fa-award"></i> Klaim Hadiah</a></li>
                                    @endif
                                </ul>
                            </div>
                        </li>
                        
                        @if (session()->missing('idpengguna'))
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

                        @if (session()->has('idpengguna'))
                        <li class="nav-item">
                            <a href="/user/notifikasi" class="nav-link btn" style="color: green">
                                <i class="fas fa-bell"></i>
                                <span class="badge bg-danger">3</span>
                            </a>
                        </li>                        
                        <li class="nav-item btn" style="font-size: 18px">
                            <a href="/user/profile" style="color: green">
                                <i class="fas fa-user" style="margin-right: 3mm"></i>{{ session('idpengguna')['username'] }}
                            </a>
                        </li>
                        <li class="nav-item btn" style="font-size: 18px; margin-right: 3mm; color: green">
                            <i class="fas fa-coins" style="margin-right: 3mm"></i>{{ Auth::user()->poinpengguna }}
                        </li>                        
                        <li class="nav-item">
                            <a href="{{ url('logout') }}">
                                <button type="button" class="btn btn-success">LOGOUT</button>
                            </a>
                        </li>
                        @endif

                    </ul>
                    
                    <a href="@if (session()->has('idpengguna'))
                        /user
                    @else
                        /
                    @endif"><img style="width: 300px" class="btn" src="{{ asset('gambar/logo-judul-removebg.png') }}" alt=""></a>

                </div>
            </nav>
        </div>

        <div class="mt-5 row">
            @yield('content')
        </div>
        
        <div class="mt-3">
            <nav class="navbar navbar-expand-lg">
                <div style="font-size: 18px" class="container-fluid">
                    <div style="color: @if (request()->is('/','login','register','user','user/buangsampah'))
                        white
                    @endif">
                        <i class="fas fa-phone" style="margin-right: 3mm"></i> Contact us: etrashpoint@mail.com
                    </div>
                    <div>
                        <img style="width: 150px" src="{{ asset('gambar/A&B-project.png') }}" alt="">
                    </div>
                </div>
            </nav>
        </div>
        
    </div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('script.js') }}"></script>

</body>

</html>