<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Http\Request;

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
        $dados = $request->except('_token');

        Voluntario::create($dados);

        return redirect('/voluntarios');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
                //
                $voluntario = Voluntario::find($id);

                $dados = $request->only('nome', 'cpf', 'email', 'telefone', 'areas');
        
                $voluntario->update($dados);
        
                return redirect('/voluntario');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
