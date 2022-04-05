<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistroController extends Controller
{
    public function getValidate()
    {
        return view('registro');
    }

    public function postValidate(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'password' => 'required|min:8|max:255',
            'confirm'  => 'required|same:password'
        ]);
        
        $request->toArray();
        $usuario = new Usuario();
        $usuario->nome = $request->name;
        $usuario->email = $request->email;
        $usuario->tipo = $request->username;
        $usuario->senha = Hash::make($request->password);

        $usuario->save();

        return redirect()->to('index');
    }
}
