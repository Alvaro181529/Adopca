<?php

namespace App\Http\Controllers;

use App\Models\Clasificado;
use App\Models\Mascota;
use App\Models\Perfile;
use App\Models\Posteado;
use App\Models\Servicio;
use App\Models\Servicioperfile;
use App\Models\Tipo;
use App\Models\User;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $posteados = Posteado::paginate();
        $perfiles = Perfile::paginate();
        $servicioperfiles = Servicioperfile::paginate();
        $users = User::paginate();
        $mascotas =Mascota::paginate();

        return view('home', compact('posteados', 'servicioperfiles', 'perfiles','users', 'mascotas'))
            ->with('i', (request()->input('page', 1) - 1) * $posteados->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $perfiles->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $users->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $mascotas->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $servicioperfiles->perPage());
    }
}
