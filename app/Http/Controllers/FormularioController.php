<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormularioController extends Controller
{
    public function formulario()
{
    return view('registro');
}
    public function registro(Request $request)
{
    
    $request->validate([
        'nombre' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|string|min:8|confirmed',
    ]);

    $usuario = User::create([
        'name' => $request->nombre,
        'email' => $request->email,
        'password' => Hash::make($request->password),
    ]);

    Auth::login($usuario);

    return redirect('/home');
}
}
