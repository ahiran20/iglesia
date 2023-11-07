<?php

namespace App\Http\Controllers;

use App\Models\bautizo;
use Illuminate\Http\Request;
use App\Http\Controllers\MiembroController;

use function PHPUnit\Framework\returnSelf;

class BautizoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bautizo = bautizo::all();
        return view('bautizados',compact('bautizo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        
          
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $bautizo = new bautizo();
        $bautizo->id_miembro =$request->id_miembro;
        $bautizo->ci = $request->post('ci');
        $bautizo->encargado_del_bautizo = $request->post('encargado_del_bautizo');
        $bautizo->testigo = $request->post('testigo');
        $bautizo->fecha_de_bautizo = $request->post('fecha_de_bautizo');
        $bautizo->save();
        return redirect()->route("bautizo.index");    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\bautizo  $bautizo
     * @return \Illuminate\Http\Response
     */
    public function show(bautizo $bautizo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\bautizo  $bautizo
     * @return \Illuminate\Http\Response
     */
    public function edit(bautizo $bautizo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\bautizo  $bautizo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, bautizo $bautizo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\bautizo  $bautizo
     * @return \Illuminate\Http\Response
     */
    public function destroy(bautizo $bautizo)
    {
        //
    }
}
