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

class TuspaginaController extends Controller
{
    public function index()
    {
        $perfiles = Perfile::paginate();
        $posteados = Posteado::paginate();
        $servicios = Servicio::paginate();
        $productos = Producto::paginate();
        $users = User::paginate();
        $servicioperfiles = Servicioperfile::paginate();

        return view('tuspaginas', compact('perfiles', 'posteados', 'servicioperfiles', 'servicios', 'productos','users'))
            ->with('i', (request()->input('page', 1) - 1) * $servicioperfiles->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $servicios->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $posteados->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage())
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
        $productos = Producto::paginate();
        $producto = Producto::find($id);
        // 'servicio',
        return view('tuspaginas', compact('posteados', 'perfile', 'servicioperfile', 'servicioperfiles', 'servicios', 'productos', 'producto'));
    }
}
