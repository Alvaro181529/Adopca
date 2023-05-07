<?php

namespace App\Http\Controllers;

use App\Models\Clasificado;
use App\Models\Perfile;
use App\Models\Posteado;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/**
 * Class PosteadoController
 * @package App\Http\Controllers
 */
class PosteadoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posteados = Posteado::paginate();
        return view('posteado.index', compact('posteados'))
            ->with('i', (request()->input('page', 1) - 1) * $posteados->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    { 
        $posteado = new Posteado();
        $clasificado = Clasificado::pluck('cla_nombre', 'id');
        $perfil = Perfile::pluck('per_titulo', 'id');
        $fcha = date('Y-m-d');
        return view('posteado.create', compact('posteado', 'clasificado','perfil', 'fcha'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Posteado::$rules);
        $posteado = $request->all();
        if ($request->hasFile('pos_img')) {
            $posteado['pos_img'] = $request->file('pos_img')->store('uploads', 'public');
        }
        $posteado = Posteado::create($posteado);
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
        $posteado = Posteado::find($id);

        return view('posteado.show', compact('posteado'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $posteado = Posteado::find($id);
        $clasificado = Clasificado::pluck('cla_nombre', 'id');
        $perfil = Perfile::pluck('per_titulo', 'id');
        $fcha = date('Y-m-d');
        return view('posteado.edit', compact('posteado', 'clasificado','perfil','fcha'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Posteado $posteado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posteado $posteado)
    {
        request()->validate(Posteado::$rules);
        Storage::delete('public/' . $posteado->pos_img);

        $posteados = $request->all();
        if ($request->hasFile('pos_img')) {
            $posteados['pos_img'] = $request->file('pos_img')->store('uploads', 'public');
        }
        $posteado->update($posteados);

        return redirect()->route('posteados.index')
            ->with('success', 'Posteado updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $posteado = Posteado::find($id)->delete();

        return redirect()->route('posteados.index')
            ->with('success', 'Posteado deleted successfully');
    }
}
