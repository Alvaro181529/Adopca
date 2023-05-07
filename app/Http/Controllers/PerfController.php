<?php

namespace App\Http\Controllers;

use App\Models\Imagene;
use App\Models\Perfile;
use App\Models\Posteado;
use App\Models\Producto;
use App\Models\Servicio;
use App\Models\Servicioperfile;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;

class PerfController extends Controller
{
    public function index()
    {
        $perfiles = Perfile::paginate();
        $posteados = Posteado::paginate();
        $servicios = Servicio::paginate();
        $productos = Producto::paginate();
        $servicioperfiles = Servicioperfile::paginate();

        return view('perfil', compact('perfiles', 'posteados', 'servicioperfiles', 'servicios', 'productos'))
            ->with('i', (request()->input('page', 1) - 1) * $servicioperfiles->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $servicios->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $posteados->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $perfiles->perPage());
    }

    public function show($id)
    {
        $posteados = Posteado::paginate();
        $perfile = Perfile::find($id);
        // $servicio = Servicio::paginate();
        $servicios = Servicio::find($id);
        $servicioperfiles = Servicioperfile::paginate();
        $servicioperfile = Servicioperfile::find($id);
        $productos= Producto::paginate();
        $producto= Producto::find($id);
// 'servicio',
        return view('perfil', compact('posteados','perfile', 'servicioperfile', 'servicioperfiles','servicios','productos','producto'));
    }
}
