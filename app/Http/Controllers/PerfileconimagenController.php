<?php

namespace App\Http\Controllers;

use App\Models\Perfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

/**
 * Class PerfileController
 * @package App\Http\Controllers
 */
class PerfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perfiles = Perfile::paginate();

        return view('perfile.index', compact('perfiles'))
            ->with('i', (request()->input('page', 1) - 1) * $perfiles->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $perfile = new Perfile();

        return view('perfile.create', compact('perfile'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Perfile::$rules);

        $perfile = $request->all();
        if ($request->hasFile('per_imagen')) {
            $perfile['per_imagen'] = $request->file('per_imagen')->store('uploads', 'public');
        }
        if ($request->hasFile('per_imagenbaner')) {
            $perfile['per_imagenbaner'] = $request->file('per_imagenbaner')->store('uploads', 'public');
        }

        $perfile = Perfile::create($perfile);

        request()->validate(Perfile::$rules);

        // $perfile = Perfile::create($request->all());
        return redirect()->route('perfiles.index')
            ->with('success', 'Perfile created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $perfile = Perfile::find($id);

        return view('perfile.show', compact('perfile'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $perfile = Perfile::find($id);

        return view('perfile.edit', compact('perfile'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Perfile $perfile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perfile $perfile)
    {
        request()->validate(Perfile::$rules);
        $perfiles = $request->all();
        if ($request->hasFile('per_imagen')) {
            $perfiles['per_imagen'] = $request->file('per_imagen')->store('uploads', 'public');
        }
        if ($request->hasFile('per_imagenbaner')) {
            $perfiles['per_imagenbaner'] = $request->file('per_imagenbaner')->store('uploads', 'public');
        }
        $perfile->update($request->all());

        return redirect()->route('perfiles.index')
            ->with('success', 'Perfile updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $perfile = Perfile::find($id)->delete();

        return redirect()->route('perfiles.index')
            ->with('success', 'Perfile deleted successfully');
    }
}
