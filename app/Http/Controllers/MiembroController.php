<?php

namespace App\Http\Controllers;

use App\Models\miembro;
use App\Models\bautizo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;
use App\Http\Controllers\BautizoController;
use App\Http\Controllers\CelulasController;

class MiembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //para mostrar datos de la bd
        $miem = miembro::all();
        
        return view('miembros', compact('miem'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //sirve para guardar datos en la bd
        // print_r($_POST);
        $miembro = new miembro();
        $miembro->nombre = $request->post('nombre');
        $miembro->apellido_completo = $request->post('apellido_completo');
        $miembro->genero = $request->post('genero');
        $miembro->fecha_nacimiento = $request->post('fecha_nacimiento');
        $miembro->telefono = $request->post('telefono');
        $miembro->direccion = $request->post('direccion');
        $miembro->estado = $request->post('estado');
        $miembro->save();
        //bautizo
        $bautizo = new bautizo();
        
        $bautizo -> fecha_de_bautizo = $request->post('fecha_de_bautizo');
        $bautizo -> save();
        return redirect()->route("miembro.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function show(miembro $miembro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function edit(miembro $miembro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, miembro $miembro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\miembro  $miembro
     * @return \Illuminate\Http\Response
     */
    public function destroy(miembro $miembro)
    {
        //
    }
    public function miembrototal()
    {
        $totalregistro=miembro::count();
        return view('inicio',['totalregistro'=> $totalregistro]);
    }
}
