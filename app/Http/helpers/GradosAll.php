<?php

use App\Models\Grado;
use App\Models\MateriaGrado;
use App\Models\NotaEstudiente;
use App\Models\NotaFinalMateria;
use App\Models\ProfesoGrado;

function getGradosAll()
{
   return Grado::all();
}

function getGradosToProfesor($profe_id)
{
   return ProfesoGrado::where('profesor_id', $profe_id)->get();
}


function getAllMateriasProfesor($profe_id, $grado_id)
{
   return MateriaGrado::where('profesor_id', $profe_id)
      ->where('grado_id', $grado_id)
      ->get();
}



/**
 * Devuelve todas las materias que se imparten en un grado en especifico
 *
 * @param int $grado_id El id del grado que se quiere obtener sus materias
 *
 * @return \Illuminate\Database\Eloquent\Collection
 */
function getAllCursorsToGrado($grado_id)
{

   return MateriaGrado::where('grado_id', $grado_id)->get();
}



function getNotaFinalMaterias($curso, $estudiante_id): \Illuminate\Database\Eloquent\Collection
{
   return NotaEstudiente::where('curso_id', $curso)->where('estudiante_id', $estudiante_id)->get();
}


function getNotaFinalMateriasAndBloque($curso, $estudiante_id, $bloque)
{
   return NotaEstudiente::where('curso_id', $curso)
      ->where('estudiante_id', $estudiante_id)
      ->join('nota_final_tarea', 'nota_estudientes.id', '=', 'nota_final_tarea.id')
      ->select('nota_estudientes.*',  'nota_final_tarea.nombre as nombre_materia', 'nota_final_tarea.bloque as bloque')
      ->where('nota_final_tarea.bloque', $bloque)
      ->first();
}
