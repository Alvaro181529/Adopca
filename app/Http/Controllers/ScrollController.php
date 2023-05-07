<?php

namespace App\Http\Controllers;

use App\Models\Clasificado;
use App\Models\Perfile;
use App\Models\Posteado;
use App\Models\Servicio;
use App\Models\Servicioperfile;
use App\Models\Tipo;
use Illuminate\Http\Request;

/**
 * Class TipoController
 * @package App\Http\Controllers
 */
class ScrollController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfile::paginate(20);
        return view('home', compact('perfiles'))
        ->with('i', (request()->input('page', 1) - 1) * $perfiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function paginacion()
    {
        $Perfile = Perfile::paginate(20);
        return view("welcome", compact("Perfile"));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function buscador(Request $request)
    {
        $Perfile = Perfile::where("Perfile", 'like', $request->texto . "%")->take(10)->get();
        return view("welcome", compact("Perfile"));
    }
}
