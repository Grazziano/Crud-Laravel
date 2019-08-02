<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function index()
    {
        return "Este é o index controller do ContatoController!";
    }

    public function criar(Request $request)
    {
        dd($request->all());
        return "Este é o criar controller do ContatoController!";
    }

    public function editar()
    {
        return "Este é o editar controller do ContatoController!";
    }
}
