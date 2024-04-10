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
        $alumnos = Alumno::latest() ->paginate(5);
        return view('mostrar', compact('alumnos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('insertar');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Num_Control' => 'required|unique:alumnos,Num_Control', 
            'Nombre' => 'required',
            'Semestre' => 'required',
        ]);

        Alumno::create($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno creado correctamente');
    }

    /**
     * Display the specified resource.
     */
    public function show($Num_Control)
    {
        $alumno = Alumno::where('Num_Control', $Num_Control)->firstOrFail();
        return view('mostrar', compact('alumno'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($Num_Control)
    {
        $alumno = Alumno::where('Num_Control', $Num_Control)->firstOrFail();
        return view('editar', compact('alumno'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $Num_Control)
    {
        $request->validate([
            'Num_Control' => 'required|unique:alumnos,Num_Control,' . $Num_Control . ',Num_Control',
            'Nombre' => 'required',
            'Semestre' => 'required',
        ]);

        $alumno = Alumno::where('Num_Control', $Num_Control)->firstOrFail();
        $alumno->update($request->all());

        return redirect()->route('alumnos.index')->with('success', 'Alumno actualizado correctamente');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($Num_Control)
    {
        $alumno = Alumno::where('Num_Control', $Num_Control)->firstOrFail();
        $alumno->delete();

        return redirect()->route('alumnos.index')->with('success', 'Alumno eliminado correctamente');
    }
}
