<?php

namespace App\Http\Controllers;

use App\Models\Memorial;
use App\Models\Voluntario;
use Illuminate\Http\Request;

class MemorialController extends Controller
{
    public function index(Request $request)
    {
        $tipo = $request->query('tipo');

        if (!$tipo) {
            return response()->json(['message' => 'O tipo é obrigatório!'], 400);
        }

        $items = Memorial::where('tipo', $tipo)->get();

        $memorial = Memorial::get();
        return $memorial;
    }

    public function create()
    {
        return view('voluntarios.create');
    }

    public function store(Request $request)
    {
        $dados = $request->except('_token');

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $imagemPath;
        }

        Memorial::create($dados);

        return redirect('/memorial');
    }

    public function show($id)
    {
        $item = Memorial::find($id);

        if (!$item) {
            return response()->json(['message' => 'Item não encontrado.'], 404);
        }

        return response()->json($item);
    }



    public function edit(string $id)
    {
        $voluntario = Voluntario::find($id);

        return $voluntario;
    }


    public function update(Request $request, $id)
    {
        $item = Memorial::find($id);

        if (!$item) {
            return response()->json(['message' => 'Item não encontrado.'], 404);
        }

        $data = $request->validate([
            'nome' => 'required|string|max:255',
            'informacao' => 'required|string',
            'imagem' => 'required|string',
            'tipo' => 'required|in:presidente,secretaria,tesoureiro,conselheiroFiscal,suplente',
        ]);

        $item->update($data);
        return response()->json($item);
    }

    public function destroy($id)
    {
        $item = Memorial::find($id);

        if (!$item) {
            return response()->json(['message' => 'Item não encontrado.'], 404);
        }

        $item->delete();
        return response()->noContent();
    }
}
