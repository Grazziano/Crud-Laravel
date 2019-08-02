<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        $contatos = [
            (object) ["nome" => "Grazziano", "telefone" => "123456789"],
            (object) ["nome" => "Leticia", "telefone" => "123456789"]
        ];
        return view('contato.index', compact('contatos'));
    }

    public function criar(Request $request)
    {
        // dd($request['nome']);
        dd($request->all());
        return "Este é o criar controller do ContatoController!";
    }

    public function editar()
    {
        return "Este é o editar controller do ContatoController!";
    }
}
