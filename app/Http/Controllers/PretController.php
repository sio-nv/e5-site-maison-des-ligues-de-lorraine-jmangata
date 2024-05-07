<?php

namespace App\Http\Controllers;

use App\Models\Pret;
use Illuminate\Http\Request;

class PretController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $results = DB::table('prets')
    ->leftJoin('ouvrages', 'prets.coteOuvrage', '=', 'ouvrages.cote')
    ->select(DB::raw('COUNT(prets.id) AS nombreDePrets'), 'ouvrages.titre')
    ->groupBy('prets.coteOuvrage')
    ->get();

foreach ($results as $result) {
    echo "Titre de l'ouvrage: " . $result->titre . " - Nombre de prêts: " . $result->nombreDePrets . "\n";
}

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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pret  $pret
     * @return \Illuminate\Http\Response
     */
    public function show(Pret $pret)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pret  $pret
     * @return \Illuminate\Http\Response
     */
    public function edit(Pret $pret)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pret  $pret
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pret $pret)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pret  $pret
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pret $pret)
    {
        //
    }
}
