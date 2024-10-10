@extends('layouts.estudiante')

@section('content')

<div class="row justify-content-center mt-3">
    <div class="col-md-4">
        <div class="card">
            <img src="https://via.placeholder.com/300" width="300" alt="">
            <div class="card-body">
                <h4 class="card-title">Hola {{ session('estudiante')->nombre }}</h4>
                <p class="card-text">BIENVIENVENIDO <br>

                    Grado: {{ session('estudiante')->grado->nombre }}
                </p>
            </div>
        </div>
    </div>
</div>

<div class="row justify-content-center mt-3">
    <div class="col-md-4">
        <div class="card">

            <div class="card-body">
                <h4 class="card-title">CURSOS REGISTRADOS</h4>

                <ul class="list-group">
                    @foreach ($cursos as $c)
                    <li class="list-group-item">{{ $c->nombre }}</li>
                    @endforeach

                </ul>


            </div>
        </div>
    </div>
</div>

@endsection