<?php

namespace App\Http\Controllers;

use App\Models\Memorial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MemorialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $memorials = Memorial::get();

        return view('memorial.index', [
            'memorials' => $memorials
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('memorial.create');
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

        Memorial::create($dados);

        return redirect('/memorial');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $memorial = Memorial::find($id);

        return view('memorial.show', [
            'memorial' => $memorial
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $memorial = Memorial::find($id);

        return view('memorial.edit', [
            'memorial' => $memorial
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $memorial = Memorial::find($id);

        $dados = $request->only('nome', 'imagem', 'informacao');

        if($request->hasFile('imagem') && $request->file('imagem')->isValid()) {
            if($memorial->imagemPath) {
                Storage::disk('public')->delete($memorial->createimagem);
            }

            $imagemPath = $request->file('imagem')->store('imagens', 'public');
            $dados['imagem'] = $imagemPath;
        }

        $memorial->update($dados);

        return redirect('/memorial');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $memorial = Memorial::find($id);

        if($memorial->imagem) {
            Storage::disk('public')->delete($memorial->imagem);
        }

        $memorial->delete();

        return redirect('/memorial');
    }
}
