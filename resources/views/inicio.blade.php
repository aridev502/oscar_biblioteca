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


    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">ADMINISTRACION</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">ESTUDIANTE</a>
        </li>

    </ul>
    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

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


        </div>

        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">


            <div class="row justify-content-center">
                <div class="col-md-3">
                    <h2 class="text-center">ESTUDIANTE</h2>
                    <form id="form-login" method="POST" action="{{ route('estudiante.authenticate') }}">
                        @csrf
                        <div class="form-element form-stack">
                            <label for="email" class="form-label">CUI</label>
                            <input class="form-control" id="email" type="text" name="cui">

                            @error('email')
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

        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>

</html>