<?php

namespace App\Http\Controllers;

use App\Models\Alumno;
use Illuminate\Http\Request;

class AlumnoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alumnos = Alumno::all();
        return view("alumnos.alumnos",["alumnos" => $alumnos]);

        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $datos = $request->input();
        $alumno = new Alumno($datos);
        $alumno->save();
        return redirect("alumnos");
    }

    public function create()
    {
        return view("alumnos.alumnos_create");
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Alumno  $alumno)
    {
        $alumno->delete();
        return redirect("alumnos");
    }
}
