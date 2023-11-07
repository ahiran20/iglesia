<?php

namespace App\Http\Controllers;

use App\Models\celulas;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Http\Controllers\MiembroController;
use App\Models\miembro;

class CelulasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //para mostrar datos de la bd
        $text=trim($request->get('texto'));
        $dato = DB::table('celulas') 
                    ->where('lider_celu','like','%'.$text.'%')
                    ->orwhere('numero_celu','like','%'.$text,'%')
                    ->paginate();
                   
        return view('registrocelulao', compact('dato'));
        
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
        $celula = new celulas();
        $celula->lider_celu = $request->post('lider_celu');
        $celula->asistente = $request->post('asistente');
        $celula->numero_celu = $request->post('numero_celu');
        $celula->direccion = $request->post('direccion');
        $celula->hora = $request->post('hora');
        $celula->estado = $request->post('estado');
        $celula->save();
        //arreglar la conexion de vuelta para mostrar el listado de las celulas
        return redirect()->route("celula.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\celulas  $celulas
     * @return \Illuminate\Http\Response
     */
    // public function show(celulas $celulas)
    public function show($id)
    {
        $informe =celulas::findOrFail($id);
            return view('prueba',compact('informe'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\celulas  $celulas
     * @return \Illuminate\Http\Response
     */
    // public function edit(celulas $celulas)
    // public function edit($id)
    // {
    //     //este metodo nos sirve para traer los datos que se van a editar
    //     //y los coloca en un formulario
    //     $celula=celulas::find($id);
    //     return view("registrocelulao",compact('celula'));
    // }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\celulas  $celulas
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, celulas $celulas)
    public function update(Request $request)
    {
        //este metodo actualiza los datos en la bd
        $celula = celulas::find($request->post('id'));
        $celula->lider_celu = $request->post('lider_celu');
        $celula->asistente = $request->post('asistente');
        $celula->numero_celu = $request->post('numero_celu');
        $celula->direccion = $request->post('direccion');
        $celula->hora = $request->post('hora');
        $celula->estado = $request->post('estado');
        $celula->save();
        return redirect()->route("celula.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\celulas  $celulas
     * @return \Illuminate\Http\Response
     */
    public function destroy(celulas $celulas)
    {
        //
    }
    public function contartotal()
    {
        $totalregistro=celulas::count();
        return view('inicio',['totalregistro'=> $totalregistro]);
    }
    
    public function pdfcelula()
    {
        $pdcelula = celulas::count();
        $pdf = Pdf::loadView('pdfcelu',compact('pdcelula') );
        return $pdf->stream();
    }
    public function cantidadceluactiva()
    {
        // $can = DB::table('celulas')
        //             ->where()
        // return view('pdfcelu',compact('can'));
    }
    // public function pruebas($id)
    // {
    //     $informe =celulas::findOrFail($id);
    //         return view('prueba',compact('informe'));
    // } 
}
