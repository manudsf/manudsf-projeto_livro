<?php

namespace App\Http\Controllers;

use App\Models\Genero;
use Illuminate\Http\Request;

class GeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $generos = Genero::all();
        return view('genero.index', compact('generos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('genero.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $genero = new Genero([
            'nome' => $request->input('nome')
        ]);
        $genero->save();
        return redirect()->route('genero.index');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $genero = Genero::findOrFail($id);
        return view('genero.show', compact('genero'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $genero = Genero::findOrFail($id);
        return view('genero.edit', compact('genero'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $genero = Genero::findOrFail($id);
        $genero->nome = $request->input('nome');
        $genero->save();

        return redirect()->route('genero.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $genero = Genero::findOrFail($id);
        $genero->delete();
        return redirect()->route('genero.index');
    }
}
