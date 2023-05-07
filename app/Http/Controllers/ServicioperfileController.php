<?php

namespace App\Http\Controllers;

use App\Models\Perfile;
use App\Models\Servicio;
use App\Models\Servicioperfile;
use Illuminate\Http\Request;

/**
 * Class ServicioperfileController
 * @package App\Http\Controllers
 */
class ServicioperfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $servicioperfiles = Servicioperfile::paginate();

        return view('servicioperfile.index', compact('servicioperfiles'))
            ->with('i', (request()->input('page', 1) - 1) * $servicioperfiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $servicioperfile = new Servicioperfile();
        $servicio = Servicio::pluck('ser_nombre','id');
        $perfil = Perfile::pluck('per_titulo','id');
        return view('servicioperfile.create', compact('servicioperfile','servicio','perfil'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Servicioperfile::$rules);

        $servicioperfile = Servicioperfile::create($request->all());

        return redirect()->route('home')
            ->with('success', 'Creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $servicioperfile = Servicioperfile::find($id);

        return view('servicioperfile.show', compact('servicioperfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $servicioperfile = Servicioperfile::find($id);
        $servicio = Servicio::pluck('ser_nombre','id');
        $perfil = Perfile::pluck('per_titulo','id');
        return view('servicioperfile.edit', compact('servicioperfile','servicio','perfil'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Servicioperfile $servicioperfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Servicioperfile $servicioperfile)
    {
        request()->validate(Servicioperfile::$rules);

        $servicioperfile->update($request->all());

        return redirect()->route('servicioperfiles.index')
            ->with('success', 'Actualizado Correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $servicioperfile = Servicioperfile::find($id)->delete();

        return redirect()->route('servicioperfiles.index')
            ->with('warning', ' Eliminado Correctamente');
    }
}
