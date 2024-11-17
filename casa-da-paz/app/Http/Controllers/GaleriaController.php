<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{

    public function index()
    {
        $galerias = Galeria::all()->map(function ($galeria) {
            $galeria->imagens_extras = json_decode($galeria->imagens_extras, true) ?? [];
            return $galeria;
        });
    
        return response()->json($galerias);
    }
    


    public function store(Request $request)
    {
        $dados = $request->except('_token');
    
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $imagemPath;
        }
    
        $imagensExtras = [];
        for ($i = 1; $i <= 3; $i++) {
            $campoImagem = "imagemExtra{$i}";
            if ($request->hasFile($campoImagem) && $request->file($campoImagem)->isValid()) {
                $imagemExtraPath = $request->file($campoImagem)->store('imagens', 'public');
                $imagensExtras[] = $imagemExtraPath;
            }
        }
    
        $dados['imagens_extras'] = json_encode($imagensExtras); 
    
        $galeria = Galeria::create($dados);

        return response()->json($galeria, 201); 
    }


    public function show(string $id)
    {
        $galeria = Galeria::find($id);
    
        if ($galeria) {
            $galeria->imagens_extras = json_decode($galeria->imagens_extras, true) ?? [];
        }
    
        return response()->json($galeria);
    }


    public function update(Request $request, string $id)
    {
        $galeria = Galeria::find($id);

        if (!$galeria) {
            return response()->json(['message' => 'Galeria não encontrada'], 404);
        }
    
        $dados = $request->only('nome', 'data');
    
        if ($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            if ($galeria->imagem) {
                Storage::disk('public')->delete($galeria->imagem);
            }
    
            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $imagemPath;
        }
    
        $imagensExtras = json_decode($galeria->imagens_extras ?? '[]', true);
        for ($i = 1; $i <= 3; $i++) {
            $campoImagem = "imagemExtra{$i}";
            if ($request->hasFile($campoImagem) && $request->file($campoImagem)->isValid()) {
                if (isset($imagensExtras[$i - 1])) {
                    Storage::disk('public')->delete($imagensExtras[$i - 1]);
                }
                $imagensExtras[$i - 1] = $request->file($campoImagem)->store('imagens', 'public');
            }
        }
    
        $dados['imagens_extras'] = json_encode($imagensExtras); 
    
        $galeria->update($dados);

        return response()->json($galeria, 200);
    }


    public function destroy(string $id)
    {
        $galeria = Galeria::find($id);

        if (!$galeria) {
            return response()->json(['message' => 'Galeria não encontrada'], 404);
        }
    
        if ($galeria->imagem) {
            Storage::disk('public')->delete($galeria->imagem);
        }
    
        $imagensExtras = json_decode($galeria->imagens_extras ?? '[]', true);
        foreach ($imagensExtras as $imagemExtra) {
            Storage::disk('public')->delete($imagemExtra);
        }
    
        $galeria->delete();
    
        return response()->json(['message' => 'Galeria excluída com sucesso'], 200);
    }    
}
