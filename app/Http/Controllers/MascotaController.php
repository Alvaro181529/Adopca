<?php

namespace App\Http\Controllers;

use App\Models\Mascota;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
/**
 * Class MascotaController
 * @package App\Http\Controllers
 */
class MascotaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mascotas = Mascota::paginate();
        $user = User::paginate();
        return view('mascota.index', compact('mascotas', 'user'))
            ->with('i', (request()->input('page', 1) - 1) * $mascotas->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $user->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $perfile = new User();
        $user = User::pluck('name', 'id');
        $mascota = new Mascota();
        return view('mascota.create', compact('mascota', 'user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Mascota::$rules);
        $mascota = $request->all();
        if ($request->hasFile('per_imagen')) {
            $mascota['per_imagen'] = $request->file('per_imagen')->store('uploads', 'public');
        }
        $mascota = Mascota::create($mascota);
        request()->validate(Mascota::$rules);
        return redirect()->route('mascotas.index')
            ->with('success', 'Mascota Creada.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $mascota = Mascota::find($id);

        return view('mascota.show', compact('mascota'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mascota = Mascota::find($id);
        $user = User::pluck('name', 'id');
        return view('mascota.edit', compact('mascota', 'user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Mascota $mascota
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Mascota $mascota)
    {
        request()->validate(Mascota::$rules);
        Storage::delete('public/' . $mascota->per_imagen);

        $mascotas = $request->all();
        if ($request->hasFile('per_imagen')) {
            $mascotas['per_imagen'] = $request->file('per_imagen')->store('uploads', 'public');
        }
        $mascota->update($mascotas);

        return redirect()->route('mascotas.index')
            ->with('success', 'Mascota updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $mascota = Mascota::find($id)->delete();

        return redirect()->route('mascotas.index')
            ->with('success', 'Mascota deleted successfully');
    }
}
