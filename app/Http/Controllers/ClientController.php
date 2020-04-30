<?php


namespace App\Http\Controllers;

use App\client;
use Illuminate\Http\Request;

class ClientController extends Controller
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
        
        return view("clients.client_add");
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
        $client = new Client();

        $client->nom = $request->input('nom');
        $client->raison =$request->input('raison');
        $client->adresse =$request->input('adresse');
        $client->tel = $request->input('tel');
        $client->fax = $request->input('fax');
        $client->email =$request->input('email');

        
        $responsable = $request->input('responsable');
        $client->idResponsable = Functions::getIdResponsable($responsable);


        $ville = $request->input('ville');
        $client->idVille = Functions::getIdVille($ville);

        $typeclient = $request->input('typec');
        $client->typeClient = Functions::getIdVille($typeclient);
        
        $client->save();

        return redirect()->back()->with('status','Client ajouté avec succès.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(client $client)
    {
        //
    }
}
