@extends('layouts.reportes')

@section('content')
<div class="container-fluid">

   <div class="row justify-content-center mt-4">
      <div class="col-md-12 text-center">
         <img src="{{asset('logos/main.png')}}" alt="" width="15%">
      </div>

      <div class="col-md-12">
         <p>BOLETIN</p>
         NOMBRE: {{$estudiante->nombre}} <br>
         GRADO: {{$grado->nombre}}, SECCION: {{$grado->seccion}}
      </div>
   </div>

   <div class="row ">
      <div class="col-md-12">



         <table class="table">
            <thead>
               <tr>
                  <th style="border: 1px solid black;">MATERIA</th>
                  <th style="border: 1px solid black;">B. 1</th>
                  <th style="border: 1px solid black;">B. 2</th>
                  <th style="border: 1px solid black;">B. 3</th>
                  <th style="border: 1px solid black;">B. 4</th>
                  <th style="border: 1px solid black;">PROMEDIO</th>
               </tr>
            </thead>
            <tbody>
               @foreach ($cursos as $c)

               <?php
               $b1 = getNotaFinalMateriasAndBloque($c->id, $estudiante->id, 1)->calificacion;
               $b2 = getNotaFinalMateriasAndBloque($c->id, $estudiante->id, 2)->calificacion;
               $b3 = getNotaFinalMateriasAndBloque($c->id, $estudiante->id, 3)->calificacion;
               $b4 = getNotaFinalMateriasAndBloque($c->id, $estudiante->id, 4)->calificacion;
               ?>
               <tr>
                  <td>{{$c->nombre}}</td>
                  <td> {{$b1}}</td>
                  <td> {{$b2}}</td>
                  <td> {{$b3}}</td>
                  <td> {{$b4}}</td>
                  <td> {{ ($b1 + $b2 + $b3 + $b4) / 4 }} </td>
               </tr>
               @endforeach
            </tbody>
         </table>



         <p class="text-center mt-5">
            F. ___________________________________________________ <br>
            Padre de Familia
         </p>

      </div>
   </div>
</div>
@endsection