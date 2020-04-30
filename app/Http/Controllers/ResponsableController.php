<?php

namespace App\Http\Controllers;

use App\responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view("responsables.responsable_add");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $responsable = new Responsable();

        $responsable->nom = $request->input('nom');
        $responsable->prenom = $request->input('prenom');
        $responsable->tel = $request->input('tel');


        $ville = $request->input('ville');
        $responsable->idVille = Functions::getIdVille($ville);

        
        $responsable->save();

        return redirect()->back()->with('status','Responsable ajouté avec succès.');

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
     * @param  \App\responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit(responsable $responsable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, responsable $responsable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function destroy(responsable $responsable)
    {
        //
    }
}
