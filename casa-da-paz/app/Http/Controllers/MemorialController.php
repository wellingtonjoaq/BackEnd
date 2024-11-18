<?php

namespace App\Http\Controllers;

use App\Models\Memorial;
use Illuminate\Http\Request;

class MemorialController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->query('tipo');

        if (!$tipo) {
            return response()->json(['message' => 'O tipo é obrigatório!']);
        }

        $items = Memorial::where('tipo', $tipo)->get();

        $memorial = Memorial::get();
        return $memorial;
    }

    // Obter um item específico
    public function show($id)
    {
        $item = Memorial::find($id);

        if (!$item) {
            return response()->json(['message' => 'Item não encontrado.']);
        }

        return response()->json($item);
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'informacao' => 'required|string',
            'imagem' => 'required|string',
            'tipo' => 'required|in:presidente,secretaria,tesoureiro,conselheiroFiscal,suplente',
        ]);

        $item = Memorial::create($data);
        return response()->json($item);
    }

    // Atualizar um item existente
    public function update(Request $request, $id)
    {
        $item = Memorial::find($id);

        if (!$item) {
            return response()->json(['message' => 'Item não encontrado.']);
        }

        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'informacao' => 'required|string',
            'tipo' => 'required|in:presidente,secretaria,tesoureiro,conselheiroFiscal,suplente',
        ]);

        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $data['imagem'] = $imagemPath;
        }

        $item->update($data);

        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = Memorial::find($id);

        if (!$item) {
            return response()->json(['message' => 'Item não encontrado.']);
        }

        $item->delete();

        return response()->noContent();
    }
}
