<?php

namespace App\Http\Controllers;

use App\Models\Leitura;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LeituraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leituras = Leitura::all();
        return view('leitura.index', compact('leituras'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('leitura.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $leitura = new Leitura([
            'user_id' => $request->input('user_id'),
            'book_id' => $request->input('book_id'),
            'status_id' =>$request->input('status_id'),
            'avaliacao'=> $request->input('avaliacao'),
            'lido_em'=>$request->input('lido_em')
        ]);
        $leitura->save();
        return redirect()->route('leitura.index');
        Route::resource('leitura', LeituraController::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(Leitura $leitura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Leitura $leitura)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Leitura $leitura)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Leitura $leitura)
    {
        //
    }
}
