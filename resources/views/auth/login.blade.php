<!doctype html>
<html lang="en">

<head>
    <title>{{config('app.name')}}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>


    <div class="row justify-content-center">
        <div class="col-md-3">
            <h2 class="text-center">LOGIN DE ADMINISTRACION</h2>
            <form id="form-login" method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-element form-stack">
                    <label for="email" class="form-label">CORREO</label>
                    <input class="form-control" id="email" type="email" name="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-element form-stack">
                    <label for="password-signup" class="form-label">CONTRASENA</label>
                    <input class="form-control" id="password-signup" type="password" name="password">
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-element form-submit">
                    <button id="goLeft" class="btn btn-info mt-2" type="submit">INICIAR SESION</button>
                </div>
            </form>
        </div>
    </div>


</body>

</html>