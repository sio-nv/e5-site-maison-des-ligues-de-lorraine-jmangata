<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\Ouvrage;
use App\Models\Salle;
use App\Models\Societe;
use Illuminate\Http\Request;

class GestController extends Controller
{
    public function index()
    {
        $nombreSalle = Salle::count();
        $nombreClient = Client::count();
        $nombreOuvrage = Ouvrage::count();
        $nombreSociete = Societe::count();
        return view('gestionnaires/welcome-gest',["nombreSalle"=>$nombreSalle,"nombreClient"=>$nombreClient,"nombreOuvrage"=>$nombreOuvrage,"nombreSociete"=>$nombreSociete]);
    }
}
