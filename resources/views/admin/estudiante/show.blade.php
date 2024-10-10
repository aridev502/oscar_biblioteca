@extends('layouts.admin')


@section('content')


<div class="row">

    <div class="col-4"></div>
    <div class="col-4 text-center">

        <div class="card text-center">
            <img class="card-img-top" src="https://img.freepik.com/vector-gratis/ilustracion-dibujos-animados-nerd-dibujados-mano_23-2151219098.jpg?size=338&ext=jpg&ga=GA1.1.1826414947.1728432000&semt=ais_hybrid" alt="" style="width: 50%;">
            <div class="card-body">

            </div>
        </div>

    </div>
    <div class="col-4"></div>

    <div class="col-md-6">
        <div class="card">

            <div class="card-body">
                <h1 class="text-center">Información del Estudiante</h1>
                <hr>
                <div class="well">
                    <p><strong>Nombre:</strong> {{ $estudiante->nombre }}</p>
                    <p><strong>Apellido:</strong> {{ $estudiante->apellido }}</p>
                    <p><strong>CUI:</strong> {{ $estudiante->cui }}</p>
                    <p><strong>Teléfono:</strong> {{ $estudiante->telefono }}</p>
                    <p><strong>Padre:</strong> {{ $estudiante->padre }}</p>
                    <p><strong>Telefono de Padre:</strong> {{ $estudiante->t_padre }}</p>
                    <p><strong>DPI de Padre:</strong> {{ $estudiante->t_cui }}</p>
                </div>
            </div>
        </div>
    </div>

    <div class="col-md-6">
        <div class="card">

            <div class="card-body">
                <form action="{{route('estu.update' , $estudiante->id )}}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $estudiante->nombre }}">
                    </div>
                    <div class="form-group">
                        <label for="apellido">Apellido:</label>
                        <input type="text" class="form-control" id="apellido" name="apellido" value="{{ $estudiante->apellido }}">
                    </div>
                    <div class="form-group">
                        <label for="cui">CUI:</label>
                        <input type="text" class="form-control" id="cui" name="cui" value="{{ $estudiante->cui }}">
                    </div>
                    <div class="form-group">
                        <label for="telefono">Teléfono:</label>
                        <input type="text" class="form-control" id="telefono" name="telefono" value="{{ $estudiante->telefono }}">
                    </div>
                    <div class="form-group">
                        <label for="padre">Padre:</label>
                        <input type="text" class="form-control" id="padre" name="padre" value="{{ $estudiante->padre }}">
                    </div>
                    <div class="form-group">
                        <label for="t_padre">Telefono de Padre:</label>
                        <input type="text" class="form-control" id="t_padre" name="t_padre" value="{{ $estudiante->t_padre }}">
                    </div>
                    <div class="form-group">
                        <label for="t_cui">CUI de Padre:</label>
                        <input type="text" class="form-control" id="t_cui" name="t_cui" value="{{ $estudiante->t_cui }}">
                    </div>
                    <button type="submit" class="btn btn-primary" onclick="return confirm('¿Estas seguro de actualizar el estudiante?')">Actualizar</button>

                </form>
            </div>
        </div>
    </div>
</div>

@endsection