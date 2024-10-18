<div class="row">
    @foreach ($estu as $e )

    <div class="col-md-4">
        <div class="card">
            <div class="card-body">

                <h4 class="card-title">NOMBRES: {{$e->nombre}}</h4> <br>
                <form action="{{route('notaFinal.updateNota')}}" method="post">
                    @csrf

                    <div class="form-group">
                        <label for="">TAREA</label>
                        <select class="form-control" name="tarea_id" id="">
                            @foreach ($notas as $t)
                            <option value="{{$t->id}}">{{$t->nombre}} {{$t->bloque}}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="">CALIFICACION</label>
                        <input type="number" class="form-control" name="calificacion" id="">
                    </div>

                    <button type="submit" class="btn btn-primary">GUARDAR</button>

                </form>

            </div>
        </div>
    </div>

    @endforeach
</div>