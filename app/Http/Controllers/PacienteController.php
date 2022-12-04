<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use App\Models\Medicamento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class PacienteController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('index', 'show','pagina_de_caida');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pacientes = Paciente::all();
        //$pacientes = Paciente::where('user_id', Auth::id())->get(); 
        //$pacientes = Auth::user()->pacientes;
        //$pacientes = $user->pacientes;
        return view('pacientes/pacientesIndex', compact('pacientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        $medicamentos = Medicamento::all();
        return view('pacientes/pacientesCreate', compact('users', 'medicamentos'));
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
            'ingreso' => 'required',
            'user_id' => 'required',
            'medicamentos_id' => 'required'
        ]);

        //$request->merge(['user_id' => Auth::id()]);
        $paciente = Paciente::create($request->all());

        $paciente->medicamentos()->attach($request->medicamentos_id);

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
        $users = User::all();
        $medicamentos = Medicamento::all();
        return view('pacientes/pacientesEdit', compact('paciente', 'users', 'medicamentos'));
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
            'ingreso' => 'required',
            'user_id' => 'required',
            'medicamentos_id' => 'required'
        ]);

        // $paciente->nombre = $request ->nombre;
        // $paciente->correo = $request ->correo;
        // $paciente->genero = $request ->genero;
        // $paciente->sangre = $request ->sangre;
        // $paciente->comentario = $request ->comentario;
        // $paciente->ingreso = $request ->ingreso;
        // $paciente->save();

        //Paciente::where('id', $paciente->id)->update($request->all());
        //Paciente::where('id', $paciente->id)->update($request->except('_token', '_method'));

        Paciente::where('id', $paciente->id)->update($request->except('_token', '_method', 'medicamentos_id'));

        $paciente->medicamentos()->sync($request->medicamentos_id);

        //return redirect()->route('paciente/show', $paciente->id);
        return view('pacientes/pacienteShow', compact('paciente'));
        

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        //$paciente->medicamentos->detach();

        $paciente->delete();

        return redirect('/paciente');
    }

    public function pagina_de_caida()
    {
        return view('landingpage');
    }
}
