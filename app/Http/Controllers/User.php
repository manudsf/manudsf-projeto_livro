<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class User extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $users=new User([
            'nome'=>$request->input('nome'),
            'email'=>$request->input('email'),
            'senha'=>$request->input('senha')
        ]);

        $user->save();
        return redirect()->route('user.index');
        Route::resource('user', UserController::class);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::findOrFails($id);
        return view('user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
    
        $user->nome = $request->input('nome');
        $user->email = $request->input('email');
        $user->senha = $request->input('senha'); 
        
        $user->save();
    
        return redirect()->route('user.index');
    }
    
    /**
     * Remove the specified resource from storage.
     */
    /**
 * Remove the specified resource from storage.
 */
public function destroy($id)
{
    $user = User::findOrFail($id);
    $user->delete();
    return redirect()->route('user.index');
}

}
