<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;

class PacienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        return view('pacientes/pacientesIndex', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes/pacientesCreate');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:100',
            'correo' => ['required', 'email'],
            'genero' => 'required',
            'sangre' => 'required',
            'comentario' => 'required|max:255',
            'ingreso' => 'required'
        ]);

        Paciente::create($request->all());

        return redirect('/paciente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        return view('pacientes/pacienteShow', compact('paciente'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('pacientes/pacientesEdit', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Paciente $paciente)
    {
        $request->validate([
            'nombre' => 'required|min:3|max:100',
            'correo' => ['required', 'email'],
            'genero' => 'required',
            'sangre' => 'required',
            'comentario' => 'required|max:255',
            'ingreso' => 'required'
        ]);

        $paciente->nombre = $request ->nombre;
        $paciente->correo = $request ->correo;
        $paciente->genero = $request ->genero;
        $paciente->sangre = $request ->sangre;
        $paciente->comentario = $request ->comentario;
        $paciente->ingreso = $request ->ingreso;
        $paciente->save();

        //Paciente::where('id', $paciente->id)->update($request->all());
        //Paciente::where('id', $paciente->id)->update($request->except('_token', '_method'));

        return redirect('/paciente');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();

        return redirect('/paciente');
    }
}
