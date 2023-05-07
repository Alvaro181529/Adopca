<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use App\Models\Producto;
use App\Models\Servicio;
use App\Models\Perfile;

use App\Models\Servicioperfile;
use Illuminate\Http\Request;


/**
 * Class ProductoController
 * @package App\Http\Controllers
 */
class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function produ()
    // {
    //     $productos = Producto::paginate();
    //     return view('producto.produ', compact('productos'))
    //         ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    // }

    public function index()
    {
        $productos = Producto::paginate();
        $perfiles = Perfile::paginate();

        return view('producto.produ', compact('productos', 'perfiles'))
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage())
            ->with('i', (request()->input('page', 1) - 1) * $productos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $producto = new Producto();
        $categorias = Categoria::pluck('cat_nombre', 'id');
        $serper = Servicio::pluck('ser_nombre', 'id');

        return view('producto.create', compact('producto', 'categorias', 'serper'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Producto::$rules);

        $producto = Producto::create($request->all());

        return redirect()->route('servicioperfiles.create')
            ->with('success', 'Producto creado.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $producto = Producto::find($id);

        return view('producto.show', compact('producto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $producto = Producto::find($id);
        $categorias = Categoria::pluck('cat_nombre', 'id');
        $serper = Servicio::pluck('ser_nombre', 'id');
        return view('producto.edit', compact('producto', 'categorias', 'serper'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Producto $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Producto $producto)
    {
        request()->validate(Producto::$rules);

        $producto->update($request->all());

        return redirect()->route('productos.index')
            ->with('success', 'Producto Actualizado');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $producto = Producto::find($id)->delete();

        return redirect()->route('productos.index')
            ->with('warning', 'Producto eliminado correctamente');
    }
}
