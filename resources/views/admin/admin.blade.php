<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>[ADMIN] E-Trash Point</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Fredoka&display=swap">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('admin.css') }}">
    
</head>

<body @if (request()->is('admin')) style="background-color: rgba(210, 240, 230, 0.25);" @endif>
    <div class="container-fluid animated content">
        <div>
            <nav class="navbar navbar-expand-lg" style="background-color: rgba(210, 240, 230, 0.75)">
                <div class="container-fluid">
                    
                    <ul class="navbar-nav gap-3">
                        <li class="nav-item">
                            <div class="btn-group">
                                <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false" style="font-size: 18px">MENU</button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="/admin/infotrash"><i class="fas fa-trash" style="margin-right: 3pt"></i> Info Trash</a></li>
                                    <li><a class="dropdown-item" href="/admin/kataloghadiah"><i class="fas fa-gift" style="margin-right: 3pt"></i> Katalog Hadiah</a></li>
                                    <li><a class="dropdown-item" href="/admin/konter"><i class="fas fa-store" style="margin-right: 3pt"></i> Konter</a></li>
                                    <li><a class="dropdown-item" href="/admin/historibuangsampah"><i class="fas fa-history" style="margin-right: 3pt"></i> Histori Buang Sampah</a></li>
                                    <li><a class="dropdown-item" href="/admin/klaimhadiah"><i class="fas fa-award" style="margin-right: 3pt"></i> Klaim Hadiah</a></li>
                                    <li><a class="dropdown-item" href="/admin/profileuser"><i class="fas fa-user-circle" style="margin-right: 3pt"></i> Profile User</a></li>
                                </ul>
                            </div>
                        </li>

                        <li class="nav-item btn" style="font-size: 18px">
                            <a href="" style="color: green">
                                <i class="fas fa-user" style="margin-right: 3mm"></i>ADMIN
                            </a>
                        </li>

                        <li class="nav-item">
                            <a href="/">
                                <button type="button" class="btn btn-success">LOGOUT</button>
                            </a>
                        </li>

                    </ul>
                    
                    <a href="/admin"><img style="width: 300px" class="btn" src="{{ asset('gambar/logo-judul-removebg.png') }}" alt=""></a>

                </div>
            </nav>
        </div>

        <div class="mt-5 row">
            @yield('content')
        </div>
        
        <div class="mt-3">
            <nav class="navbar navbar-expand-lg">
                <div style="font-size: 18px" class="container-fluid">
                    <div></div>
                    <div>
                        <img style="width: 150px" src="{{ asset('gambar/A&B-project.png') }}" alt="">
                    </div>
                </div>
            </nav>
        </div>
        
    </div>
    
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin.js') }}"></script>

</body>

</html>