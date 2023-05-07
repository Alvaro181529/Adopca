<?php

namespace App\Http\Controllers;

use App\Models\Clasificado;
use App\Models\Perfile;
use App\Models\Posteado;
use App\Models\Servicio;
use App\Models\Servicioperfile;
use App\Models\Tipo;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
public function index()
    {
        $posteados = Posteado::paginate();
        $perfiles = Perfile::paginate();
        $servicioperfiles = Servicioperfile::paginate();

        return view('home', compact('posteados', 'servicioperfiles', 'perfiles'))
            ->with('i', (request()->input('page', 1) - 1) * $posteados->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $perfiles->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $servicioperfiles->perPage());
    }
}