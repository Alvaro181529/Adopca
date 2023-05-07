<?php

namespace App\Http\Controllers;

use App\Models\Conversacione;
use Illuminate\Http\Request;

/**
 * Class ConversacioneController
 * @package App\Http\Controllers
 */
class ConversacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conversaciones = Conversacione::paginate();

        return view('conversacione.index', compact('conversaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $conversaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $conversacione = new Conversacione();
        return view('conversacione.create', compact('conversacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Conversacione::$rules);

        $conversacione = Conversacione::create($request->all());

        return redirect()->route('conversaciones.index')
            ->with('success', 'Conversacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $conversacione = Conversacione::find($id);

        return view('conversacione.show', compact('conversacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $conversacione = Conversacione::find($id);

        return view('conversacione.edit', compact('conversacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Conversacione $conversacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Conversacione $conversacione)
    {
        request()->validate(Conversacione::$rules);

        $conversacione->update($request->all());

        return redirect()->route('conversaciones.index')
            ->with('success', 'Conversacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $conversacione = Conversacione::find($id)->delete();

        return redirect()->route('conversaciones.index')
            ->with('success', 'Conversacione deleted successfully');
    }
}
