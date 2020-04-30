<?php

namespace App\Http\Controllers;

use App\docDetail;
use Illuminate\Http\Request;

class DocDetailController extends Controller
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
        return view("docdetails.docdetails_add");

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
        $docdetail = new DocDetail();

        $docdetail->date = $request->input('date');
        $docdetail->date_echeance =$request->input('dateech');
        $docdetail->paye =$request->input('paye');
        $docdetail->idClient = $request->input('client');
        $docdetail->idSociete = $request->input('societe');

        

        $typefacture = $request->input('typefact');
        $docdetail->IdTypeDocDetail = Functions::getIdTypeDocDetail($typefacture);
        
        $docdetail->save();

        return redirect()->back()->with('status','Facture  ajoutée avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\docDetail  $docDetail
     * @return \Illuminate\Http\Response
     */
    public function show(docDetail $docDetail)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\docDetail  $docDetail
     * @return \Illuminate\Http\Response
     */
    public function edit(docDetail $docDetail)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\docDetail  $docDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, docDetail $docDetail)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\docDetail  $docDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy(docDetail $docDetail)
    {
        //
    }
}
