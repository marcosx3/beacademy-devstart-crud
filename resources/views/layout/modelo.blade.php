<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">

    <title>@yield('title')</title>
    
</head>
<body>
    <header class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
              <a class="navbar-brand" href="#">Logo marota</a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link"  href="/">Cadastro</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/lista">Listar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="/atualiza">Atualizar</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link"  href="#">Remover</a>
                  </li>
                </ul>
                
              </div>
            </div>
          </nav>
    </header>

    @yield('content')

    <script src="{{asset('bootstrap-5.0.2/js/bootstrap.min.js')}}"></script>
</body>
</html>