<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class VoluntarioController extends Controller
{

    public function index()
    {
        $voluntarios = Voluntario::get();

        return view('voluntarios.index', [
            'voluntarios' => $voluntarios
        ]);
    }


    public function create()
    {
        return view('voluntarios.create');
    }


    public function store(Request $request)
    {
        $dados = $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:11',
            'email' => 'required|email',
            'telefone' => 'nullable|string',
            'areas' => 'nullable|string',
        ]);

        Voluntario::create($dados);

        return redirect()->route('voluntarios.index')->with('success', 'Voluntário criado com sucesso!');

    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $voluntario = Voluntario::find($id);

        return view('voluntarios.show', [
            'voluntario' => $voluntario
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $voluntario = Voluntario::find($id);

        return view('voluntarios.edit', [
            'voluntario' => $voluntario
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                //
                $voluntario = Voluntario::find($id);

                $dados = $request->validate([
                    'nome' => 'required|string|max:255',
                    'cpf' => 'required|string|max:11',
                    'email' => 'required|email',
                    'telefone' => 'nullable|string',
                    'areas' => 'nullable|string',
                ]);
                
                $voluntario->update($dados);
        
                return redirect('/voluntarios');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $voluntario = Voluntario::find($id);

        $voluntario->delete();

        return redirect('/voluntarios');
    }
}
