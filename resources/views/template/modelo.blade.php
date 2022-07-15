<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.css">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    
    <title>@yield('title')</title>
</head>

<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand" href="{{ url('/produtos/lista') }}">
                    <img src="{{ asset('storage/app/public/logo/asterix.jpg')}}" alt="" srcset="" width="50px" height="50px">
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" href="/produtos/dashboard">Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/produtos/cadastro">Cadastro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/produtos/lista">Listar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    @yield('content')
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('bootstrap-5.0.2/js/bootstrap.bundle.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.js"></script>
    <script  src="{{ asset('js/app.js') }}"></script>
</body>

</html>
