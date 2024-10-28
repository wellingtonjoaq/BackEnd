<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" aria-current="page" href="#">ÍNICIO</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" aria-current="page" href="#">COMO AJUDAR</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" aria-current="page" href="#">BAZAR</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" aria-current="page" href="#">GALERIA</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" aria-current="page" href="#">MEMORIAL</a>
                    </li>
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" aria-current="page" href="#">TRANPARENCIA</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container">
        @yield('content')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>