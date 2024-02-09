<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Trash Point</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
</head>

<body>
    <div class="container-fluid">
        <div class="mt-3">
            <nav class="navbar navbar-expand-lg bg-body-tertiary">
                <div class="container-fluid">
                    <a href=""><img style="width: 350px" src="{{ asset('gambar/logo-judul-removebg.png') }}" alt=""></a>
                    <ul class="navbar-nav gap-3">

                        <li class="nav-item">
                            <a href="">
                                <span class="badge text-bg-secondary" style="font-size: medium">Register</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="">
                                <span class="badge text-bg-primary" style="font-size: medium">Login</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </nav>
        </div>
        <div>
            <li class="list-group">Info Trash</li>
            <li class="list-group">Katalog Hadiah</li>
        </div>
        <div class="mt-5">
            <nav class="navbar navbar-expand-lg">
                <div class="container-fluid">
                    Contact us: etrashpoint@mail.com
                    <a>
                        <img style="width: 150px" src="{{ asset('gambar/A&B-project.png') }}" alt="">
                    </a>
                </div>
            </nav>
        </div>
    </div>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
</body>

</html>