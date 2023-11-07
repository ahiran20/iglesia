<?php

namespace App\Http\Controllers;

use App\Models\lideres;
use Illuminate\Http\Request;

class LideresController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $escue = lideres::all();
        return view('escuela',compact('escue'));
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
        //
        $escuela = new lideres();
        $escuela->id_encuentro=$request->id_encuentro;

        $escuela->primeraclase_m_uno=$request->post('primeraclase_m_uno');
        $escuela->segundaclase_m_uno=$request->post('segundaclase_m_uno');
        $escuela->terceraclase_m_uno=$request->post('terceraclase_m_uno');
        $escuela->cuartaclase_m_uno=$request->post('cuartaclase_m_uno');

        $escuela->primeraclase_m_dos=$request->post('primeraclase_m_dos');
        $escuela->segundaclase_m_dos=$request->post('segundaclase_m_dos');
        $escuela->terceraclase_m_dos=$request->post('terceraclase_m_dos');
        $escuela->cuartaclase_m_dos=$request->post('cuartaclase_m_dos');

        $escuela->primeraclase_m_tres=$request->post('primeraclase_m_tres');
        $escuela->segundaclase_m_tres=$request->post('segundaclase_m_tres');
        $escuela->terceraclase_m_tres=$request->post('terceraclase_m_tres');
        $escuela->cuartaclase_m_tres=$request->post('cuartaclase_m_tres');
        $escuela->save();
        return redirect()->route("lidere.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\lideres  $lideres
     * @return \Illuminate\Http\Response
     */
    public function show(lideres $lideres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\lideres  $lideres
     * @return \Illuminate\Http\Response
     */
    public function edit(lideres $lideres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\lideres  $lideres
     * @return \Illuminate\Http\Response
     */
    // public function update(Request $request, lideres $lideres)
    public function update(Request $request, $id)
    {
        //
        $escuela =lideres::find($id);
        $escuela->id_encuentro=$request->id_encuentro;
       

        $escuela->primeraclase_m_uno=$request->post('primeraclase_m_uno');
        $escuela->segundaclase_m_uno=$request->post('segundaclase_m_uno');
        $escuela->terceraclase_m_uno=$request->post('terceraclase_m_uno');
        $escuela->cuartaclase_m_uno=$request->post('cuartaclase_m_uno');

        $escuela->primeraclase_m_dos=$request->post('primeraclase_m_dos');
        $escuela->segundaclase_m_dos=$request->post('segundaclase_m_dos');
        $escuela->terceraclase_m_dos=$request->post('terceraclase_m_dos');
        $escuela->cuartaclase_m_dos=$request->post('cuartaclase_m_dos');

        $escuela->primeraclase_m_tres=$request->post('primeraclase_m_tres');
        $escuela->segundaclase_m_tres=$request->post('segundaclase_m_tres');
        $escuela->terceraclase_m_tres=$request->post('terceraclase_m_tres');
        $escuela->cuartaclase_m_tres=$request->post('cuartaclase_m_tres');
        $escuela->save();
        return redirect()->route("lidere.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\lideres  $lideres
     * @return \Illuminate\Http\Response
     */
    public function destroy(lideres $lideres)
    {
        //
    }
}
