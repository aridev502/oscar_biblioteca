<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Estudiante;
use App\Models\Grado;
use App\Models\MateriaGrado;
use App\Models\NotaEstudiente;
use App\Models\NotaFinalMateria;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $data = Estudiante::all();
        return view('escuela.estudiante.index', compact('data'));
    }
    public function inscribir()
    {
        return view('escuela.estudiante.inscribir', ['grados' => Grado::all()]);
    }
    public function store(Request $request)
    {
        $estu = Estudiante::create($request->all());
        // buscamos los cusrsos de un grado
        $curso = MateriaGrado::where('grado_id', $request->grado_id)->get();
        if (count($curso) > 0) {
            foreach ($curso as $cur) {
                // asignamos todas la tareas de un estudiante nuevo
                $tareas_grado = NotaFinalMateria::where('materia_id', $cur->id)->get();
                if (count($tareas_grado) > 0) {
                    foreach ($tareas_grado as $ta) {
                        $te = new NotaEstudiente();
                        $te->estudiante_id = $estu->id;
                        $te->nota_final_id = $ta->id;
                        $te->calificacion = 0;
                        $te->save();
                    }
                }


            }
        }


        return back()->with(['info' => 'estudiante guardado']);
    }
    public function update(Request $request, $id)
    {
        Estudiante::find($id)->update($request->all());
        return back()->with(['info' => 'estudiante guardado']);
    }
    public function show($id)
    {
        $g = Estudiante::find($id);
        return view('admin.estudiante.show', compact('g'));
    }
    public function delete($id)
    {
        $g = Estudiante::find($id)->delete();
        return back()->with(['info' => 'estudiante eliminado']);
    }
    public function reportes()
    {
        $grados = Grado::all();
        return view('escuela.estudiante.reporte', compact('grados'));
    }

    public function allEstudentReport(Request $request)
    {
        $data = Estudiante::all();
        return view('escuela.estudiante.reportes.all', compact('data'));
    }

    public function estudentToGrado(Request $request)
    {
        $data = Estudiante::where('grado_id', $request->grado_id)->get();
        return view('escuela.estudiante.reportes.all', compact('data'));
    }

    public function encargado()
    {
        $data = Estudiante::all();
        return view('escuela.estudiante.reportes.encargados', compact('data'));
    }
}
