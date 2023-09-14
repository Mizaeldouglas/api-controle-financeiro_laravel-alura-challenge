<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\Receitas;
use Illuminate\Http\Request;

class ReceitasController extends Controller
{
    public function index()
    {
        $receitas = Receitas::all();

        return response()->json($receitas);
    }

    public function create()
    {
    }

    public function store(Request $request)
    {
        $validade = $request->validate([
            'descricao' => 'required',
            'valor' => 'required',
            'data' => 'required|date'
        ]);

        $newReceita = Receitas::create($validade);



        return response()->json($newReceita, 201);
    }

    public function show(string $id)
    {
    }

    public function edit(string $id)
    {
    }

    public function update(Request $request, string $id)
    {
    }

    public function destroy(string $id)
    {
    }
}