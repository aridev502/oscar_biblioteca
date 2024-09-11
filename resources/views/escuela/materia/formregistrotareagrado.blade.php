<p class="hq text-center">NUEVO CUADRO</p>


<form action="{{route('notaFinal.store')}}" method="post" enctype="multipart/form-data">
   @csrf

   <input type="hidden" value="{{$data->id}}" name="materia_id">
   <input type="hidden" value="{{$data->grado_id}}" name="grado_id">

   <div class="form-group">
      <label for="">LIBRO / MATERIAL DE APOYO</label>
      <input type="file" class="form-control-file" name="bloque">
   </div>


   <div class="form-group">
      <label for="">NOMBRE</label>
      <input type="text" class="form-control" name="nombre">
   </div>

   <input type="text" class="form-control" name="valor" hidden value="0">

   <input type="date" class="form-control" name="entrega" hidden value="{{date('Y-m-d')}}">



   <div class="form-group">
      <label for="">ESTADO</label>
      <select class="form-control" name="estado">
         <option value="activo">activo</option>
         <option value="inactivo">inactivo</option>
      </select>
   </div>

   <button type="submit" class="btn btn-primary"><i class="fas fa-save    "></i>GUARDAR</button>

</form>