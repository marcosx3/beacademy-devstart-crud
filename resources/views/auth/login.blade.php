<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('bootstrap-5.0.2/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>DevStart CRUD | Login</title>
</head>

<body>
    <header class="container-fluid">
        <h3 class="logo">Logo</h3>
    </header>


    <div class="container-fluid py-5 h-100">
        <div class="container formulario ">
            <form action="{{ route('auth.check') }}" method="post">
                @csrf
                @if (Session::get('fail'))
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ Session::get('fail') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif
                <label class="form-label" for="email">Email </label>
                <input class="form-control" type="text" name="email" id="email" value="{{ old('email') }}">

                @error('email')
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        {{ $message }} <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @enderror

                <label class="form-label" for="password">Senha </label>
                <input class="form-control" type="password" name="password" id="password"
                    value="{{ old('password') }}">
                @error('password')
                    <div class="text-danger alert-dismissible fade show" role="alert">
                        {{ $message }} <button type="button" class="btn-close" data-bs-dismiss="alert"
                            aria-label="Close"></button>
                    </div>
                @enderror

                <a href="{{ route('auth.register') }}" class="d-inline-block  p-5">Não tenho uma conta.</a>
                <button type="submit" class="btn btn-primary  d-inline-block  btn-lg">Entrar</button>
            </form>

        </div>

    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

</body>

</html>
