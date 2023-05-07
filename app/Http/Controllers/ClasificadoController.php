<?php

namespace App\Http\Controllers;

use App\Models\Clasificado;
use Illuminate\Http\Request;

/**
 * Class ClasificadoController
 * @package App\Http\Controllers
 */
class ClasificadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $clasificados = Clasificado::paginate();

        return view('clasificado.index', compact('clasificados'))
            ->with('i', (request()->input('page', 1) - 1) * $clasificados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $clasificado = new Clasificado();
        return view('clasificado.create', compact('clasificado'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Clasificado::$rules);

        $clasificado = Clasificado::create($request->all());

        return redirect()->route('posteados.create')
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
        $clasificado = Clasificado::find($id);

        return view('clasificado.show', compact('clasificado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $clasificado = Clasificado::find($id);

        return view('clasificado.edit', compact('clasificado'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Clasificado $clasificado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Clasificado $clasificado)
    {
        request()->validate(Clasificado::$rules);

        $clasificado->update($request->all());

        return redirect()->route('clasificados.index')
            ->with('success', 'Actualizado correctamente');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $clasificado = Clasificado::find($id)->delete();

        return redirect()->route('clasificados.index')
            ->with('warning', 'Eliminado correctamente');
    }
}
