<?php

namespace App\Http\Controllers\Estudiante;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\MateriaGrado;
use App\Models\NotaFinalMateria;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\HttpCache\Esi;

class AuthEstudianteController extends Controller
{



    public function authenticate(Request $request)
    {
        $request->validate([
            'cui' => ['required'],
        ]);


        $estudiante = Estudiante::where('cui', $request->cui)->first();
        if (!$estudiante) return back()->withInput()->withErrors(['cui' => 'No se encontro el estudiante']);


        session(['estudiante_id' => $estudiante->id]);
        session(['estudiante' => $estudiante]);

        return redirect(route('estudiante.inicio'));
    }


    function inicio()
    {

        return view('estudiante.inicio');
    }

    /**
     * Muestra los libros de un grado en particular.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    function getLibrosToGrado($grado_id)
    {
        $materia = MateriaGrado::find($grado_id);
        $libros = NotaFinalMateria::where('materia_id', $materia->id)->where('nombre', '!=', 'NOTA FINAL DE BIMESTRE')->get();

        // dd($libros);
        return view('estudiante.libros', compact('libros', 'materia'));
    }
}
