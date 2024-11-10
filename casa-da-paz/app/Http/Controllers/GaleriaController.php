<?php

namespace App\Http\Controllers;

use App\Models\Galeria;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GaleriaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $galerias = Galeria::get();

        return view('galeria.index', [
            'galerias' => $galerias
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('galeria.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $dados = $request->except('_token');

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $imagemPath;
        }

        Galeria::create($dados);

        return redirect('/galeria');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $galeria = Galeria::find($id);

        return view('galeria.show', [
            'galeria' => $galeria
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $galeria = Galeria::find($id);

        return view('galeria.edit', [
            'galeria' => $galeria
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $galeria = Galeria::find($id);

        $dados = $request->only('nome', 'imagem', 'data');

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            if($galeria->imagemPath) {
                Storage::disk('public')->delete($galeria->createimagem);
            }

            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $imagemPath;
        }

        $galeria->update($dados);

        return redirect('/galeria');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $galeria = Galeria::find($id);

        if($galeria->imagem) {
            Storage::disk('public')->delete($galeria->imagem);
        }

        $galeria->delete();

        return redirect('/galeria');
    }
}
