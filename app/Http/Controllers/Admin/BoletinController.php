<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\MateriaGrado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BoletinController extends Controller
{

    public function boletines()
    {
        $data = Estudiante::all();
        return view('escuela.estudiante.boletines', compact('data'));
    }


    // retorna el boletin del estudiante
    public function boletin($id)
    {

        $estudiante =  Estudiante::find($id);
        $grado = Grado::find($estudiante->grado_id);
        $cursos = MateriaGrado::where('grado_id', $estudiante->grado_id)->get();
        // recorer curso para buscar tarea




        // dd($new_Array);
        $no = 1;
        return view('escuela.estudiante.boletin', compact('cursos', 'no', 'estudiante', 'grado'));
    }
}
