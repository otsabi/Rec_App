<?php

namespace App\Http\Controllers;

use App\societe;
use Illuminate\Http\Request;

class SocieteController extends Controller
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
    public function create()
    {
        //
        return view("societes.societe_add");
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
        $societe = new Societe();

        $societe->nom = $request->input('nom');
        $societe->ice =$request->input('ice');
        $societe->idFiscal =$request->input('idfisc');
        $societe->patente = $request->input('patente');
        $societe->rc = $request->input('rc');
        
        
        $societe->save();

        return redirect()->back()->with('status','Société ajoutée avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function show(societe $societe)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function edit(societe $societe)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, societe $societe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\societe  $societe
     * @return \Illuminate\Http\Response
     */
    public function destroy(societe $societe)
    {
        //
    }
}
