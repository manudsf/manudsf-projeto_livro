<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $status= Status::all();
        return view('status.index', compact('status'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('status.create');
    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $status = new Status([
            'nome'=>$request->input('nome')
        ]);
        $status->save();
        return redirect()->route('status.index');
        Route::resource('status', StatusController::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $status = status::findOrFails($id);
        return view('status.show', compact('status'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
{
    $status = Status::findOrFail($id);
    return view('status.edit', compact('status'));
}

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $status = Status::findOrFail($id);
    
        $status->nome = $request->input('nome');
        
        $status->save();
    
        return redirect()->route('status.index');
    }
    

   /**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    $status = Status::findOrFail($id);
    $status->delete();
    return redirect()->route('status.index');
}

}