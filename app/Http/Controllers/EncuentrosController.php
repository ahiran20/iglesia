<?php

namespace App\Http\Controllers;

use App\Models\encuentros;
use Illuminate\Http\Request;

class EncuentrosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $eencu=encuentros::all();
        return view('encuentro',compact('eencu'));
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
        $encue = new encuentros();
        $encue->nombre=$request->post('nombre');
        $encue->apellido_paterno=$request->post('apellido_paterno');
        $encue->apellido_materno=$request->post('apellido_materno');
        $encue->genero=$request->post('genero');
        $encue->preencuentrouno=$request->post('preencuentrouno');
        $encue->preencuentrodos=$request->post('preencuentrodos');
        $encue->preencuentrotres=$request->post('preencuentrotres');
        $encue->preencuentrocuatro=$request->post('preencuentrocuatro');
        $encue->fecha_de_encuento=$request->post('fecha_de_encuento');
        $encue->postencuentrouno=$request->post('postencuentrouno');
        $encue->postencuentrodos=$request->post('postencuentrodos');
        $encue->postencuentrotres=$request->post('postencuentrotres');
        $encue->postencuentrocuatro=$request->post('postencuentrocuatro');
        $encue->save();
        return redirect()->route('encu.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function show(encuentros $encuentros)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function edit(encuentros $encuentros)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, encuentros $encuentros)
    public function update(Request $request)
    {
        //
        $encue=encuentros::find($request->post('id'));
        $encue->nombre=$request->post('nombre');
        $encue->apellido_paterno=$request->post('apellido_paterno');
        $encue->apellido_materno=$request->post('apellido_materno');
        $encue->genero=$request->post('genero');

        $encue->preencuentrouno=$request->post('preencuentrouno');
        $encue->preencuentrodos=$request->post('preencuentrodos');
        $encue->preencuentrotres=$request->post('preencuentrotres');
        $encue->preencuentrocuatro=$request->post('preencuentrocuatro');

        $encue->fecha_de_encuento=$request->post('fecha_de_encuento');
        
        $encue->postencuentrouno=$request->post('postencuentrouno');
        $encue->postencuentrodos=$request->post('postencuentrodos');
        $encue->postencuentrotres=$request->post('postencuentrotres');
        $encue->postencuentrocuatro=$request->post('postencuentrocuatro');
        $encue->save();
        return redirect()->route('encu.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\encuentros  $encuentros
     * @return \Illuminate\Http\Response
     */
    public function destroy(encuentros $encuentros)
    {
        //
    }
}
