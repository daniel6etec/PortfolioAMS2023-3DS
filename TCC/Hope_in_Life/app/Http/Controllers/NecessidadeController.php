<?php

namespace App\Http\Controllers;

use App\Http\Resources\NecessidadeResource;
use App\Models\Necessidade;
use Illuminate\Http\Request;

class NecessidadeController extends Controller
{
    public function listarNecessidadesJson($id){
        return new NecessidadeResource(Necessidade::find($id));
    }
}
