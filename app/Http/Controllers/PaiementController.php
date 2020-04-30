<?php

namespace App\Http\Controllers;

use App\paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
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
        return view("paiements.paiement_add");
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
        $paiement = new Paiement();

        $client->montant = $request->input('montant');
        $client->date =$request->input('date');
        

        
        $docdetail = $request->input('numfact');
        $docdetail->idDocDetail = Functions::getDocDetailId($docdetail);


        $paiement = $request->input('typep');
        $paiement->idTypePaiement = Functions::getIdTypePaiement($paiement);

        
        $paiement->save();

        return redirect()->back()->with('status','Paiement ajouté avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function show(paiement $paiement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function edit(paiement $paiement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, paiement $paiement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\paiement  $paiement
     * @return \Illuminate\Http\Response
     */
    public function destroy(paiement $paiement)
    {
        //
    }
}
