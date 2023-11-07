<?php

namespace App\Http\Controllers;

use App\Models\miembro;
use App\Models\bautizo;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Print_;

use App\Http\Controllers\CelulasController;
use App\Models\celulas;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class MiembroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //para mostrar datos de la bd
        // $text=trim($request->get('texto'));
        // $miem = DB::table('miembros')
        //             ->where('nombre','like','%'.$text.'%')
        
        //             ->paginate();
        $miem = miembro::all();
        
        return view('miembros', compact('miem'));
    }
    public function bautizadoss()
    {
        $miem = miembro::all();
        return view ('bautizados', compact('miem'));
    }
    public function buscar(Request $request)
    {
        $text=trim($request->get('texto'));
        $miem = DB::table('miembros')
                    ->where('nombre','like','%'.$text.'%')
                    ->paginate();
         return view('miembros',compact('miem'));
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
        $miembro->apellido_paterno = $request->post('apellido_paterno');
        $miembro->apellido_materno = $request->post('apellido_materno');
        $miembro->genero = $request->post('genero');
        $miembro->fecha_nacimiento = $request->post('fecha_nacimiento');
        
        $miembro->telefono = $request->post('telefono');
        $miembro->zona = $request->post('zona');
        $miembro->direccion = $request->post('direccion');
        $miembro->cargo = $request->post('cargo');
        $miembro->estado = $request->post('estado');
        $miembro->id_celu = $request ->id_celu;
        $miembro->save();

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
    // public function update(Request $request, miembro $miembro)
    public function update(Request $request)
    {
        //para actulizar el registro
        $miembro = miembro::find($request->post('id_usuario'));
        $miembro->nombre = $request->post('nombre');
        $miembro->apellido_paterno = $request->post('apellido_paterno');
        $miembro->apellido_materno = $request->post('apellido_materno');
        $miembro->genero = $request->post('genero');
        $miembro->fecha_nacimiento = $request->post('fecha_nacimiento');
        
        $miembro->telefono = $request->post('telefono');
        $miembro->zona = $request->post('zona');
        $miembro->direccion = $request->post('direccion');
        $miembro->cargo = $request->post('cargo');
        $miembro->estado = $request->post('estado');
        $miembro->id_celu =$request->id_celu;
        $miembro->save();
        return redirect()->route("miembro.index");
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
    // public function miembrototal()
    // {
    //     // $totalmiemb=miembro::count();
    //     // return view('inicio',['totalmiemb'=> $totalmiemb]);
    // }
    // public function pdfmiembr()
    // {
    //     $pdmiembro = miembro::groupBY('genero')
    //         ->selectRaw('genero,count(*) as cantidad')->get();
    //     $pdf = Pdf::loadView('pdfmiembro',compact('pdmiembro') );
    //     return $pdf->stream();
    // }
    // public function miemmbro() 
    // {
    //     $miem = miembro::all();
        
    //     return view('registrocelulao', compact('miem'));
    // }
    public function mmiembro() //funciona
    {
        $mcontador=miembro::count();
        $pdf = Pdf::loadView('pdfmiembro',compact('mcontador') );
        return $pdf->stream();
    }
    // public function conteo()
    // {
    //     $conteo = miembro::count();
    //                 $pdf =pdf::loadView('pdfmiembro',compact('conteo'));
    // }
   
//     $pdmiembro = miembro::groupBY('genero')
//     ->selectRaw('genero,count(*) as cantidad')->get();
// $pdf = Pdf::loadView('pdfmiembro',compact('pdmiembro') );
// return $pdf->stream();
}
