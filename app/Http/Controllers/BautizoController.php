<?php

namespace App\Http\Controllers;

use App\Models\bautizo;
use Illuminate\Http\Request;

class BautizoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        //
        $bautizo = new bautizo();
        $bautizo->fecha_de_bautizo = $request->post('fecha_de_bautizo');
        $bautizo->save();
        return redirect()->route("miembro.index");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
