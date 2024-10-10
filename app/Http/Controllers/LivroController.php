<?php

namespace App\Http\Controllers;

use App\Models\Livro;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LivroController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $livros = Livro::all();
        return view('livro.index', compact('livros'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('livro.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $livro = new Livro([
            'titulo'=>$request->input('titulo'),
            'autor'=>$request->input('autor'),
            'genero_id'=>$request->input('genero_id')
        ]);

        $livro->save();
        return redirect()->route('livro.index');
        Route::resource('livro', LivroController::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(Livro $livro)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Livro $livro)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Livro $livro)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Livro $livro)
    {
        //
    }
}
