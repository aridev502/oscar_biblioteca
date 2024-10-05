<p class="hq text-center">NUEVO CUADRO</p>


<form action="{{route('notaFinal.store')}}" method="post" enctype="multipart/form-data">
   @csrf

   <input type="hidden" value="{{$data->id}}" name="materia_id">
   <input type="hidden" value="{{$data->grado_id}}" name="grado_id">


   <div class="form-group">
      <label for="">NOMBRE DE TAREA</label>
      <input type="text" class="form-control" name="nombre">
   </div>



   <div class="form-group">
      <label for="">NUMERO DE BIMESTRE</label>
      <input type="number" class="form-control" name="bloque">
   </div>




   <div class="form-group">

      <label for="">CALIFICACION DE TAREA</label>
      <input type="text" class="form-control" name="valor" value="0">
   </div>


   <div class="form-group">

      <label for="">FECHA DE ENTREGA</label>
      <input type="date" class="form-control" name="entrega" value="{{date('Y-m-d')}}">
   </div>



   <div class="form-group">
      <label for="">ESTADO</label>
      <select class="form-control" name="estado">
         <option value="ACTIVO">ACTIVO</option>
         <option value="INACTIVO">INACTIVO</option>
      </select>
   </div>

   <button type="submit" class="btn btn-primary"><i class="fas fa-save    "></i>GUARDAR</button>

</form>