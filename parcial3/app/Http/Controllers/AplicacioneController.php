<?php

namespace App\Http\Controllers;

use App\Models\Aplicacione;
use Illuminate\Http\Request;

/**
 * Class AplicacioneController
 * @package App\Http\Controllers
 */
class AplicacioneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $aplicaciones = Aplicacione::paginate();

        return view('aplicacione.index', compact('aplicaciones'))
            ->with('i', (request()->input('page', 1) - 1) * $aplicaciones->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $aplicacione = new Aplicacione();
        return view('aplicacione.create', compact('aplicacione'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(Aplicacione::$rules);

        $aplicacione = Aplicacione::create($request->all());

        return redirect()->route('aplicaciones.index')
            ->with('success', 'Aplicacione created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $aplicacione = Aplicacione::find($id);

        return view('aplicacione.show', compact('aplicacione'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aplicacione = Aplicacione::find($id);

        return view('aplicacione.edit', compact('aplicacione'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  Aplicacione $aplicacione
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aplicacione $aplicacione)
    {
        request()->validate(Aplicacione::$rules);

        $aplicacione->update($request->all());

        return redirect()->route('aplicaciones.index')
            ->with('success', 'Aplicacione updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $aplicacione = Aplicacione::find($id)->delete();

        return redirect()->route('aplicaciones.index')
            ->with('success', 'Aplicacione deleted successfully');
    }
}
