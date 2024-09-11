@extends('layouts.estudiante')

@section('content')

<div class='container-fluid'>
    <div class='row'>
        <div class='col'>
            <div class='card'>
                <div class='card-body'>
                    <h4 class='card-title'>{{$materia->nombre}}</h4>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        @foreach ($libros as $libro)
        <div class="col-md-3 ">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">{{$libro->nombre}}</h4>

                    <a class="btn btn-primary" href="{{ asset('storage/libros/' . $libro->bloque) }}" target="_blank" role="button"><i class="fa fa-book" aria-hidden="true"></i></a>

                    <img src="{{ asset('storage/libros/' . $libro->bloque) }}" alt="jijijija">


                </div>
            </div>
        </div>
        @endforeach

    </div>
</div>
@endsection