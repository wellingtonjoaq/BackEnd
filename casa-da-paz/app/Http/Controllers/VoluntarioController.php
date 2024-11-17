<?php

namespace App\Http\Controllers;

use App\Models\Voluntario;
use Illuminate\Http\Request;

class VoluntarioController extends Controller
{

    public function index()
    {
        $voluntarios = Voluntario::get();
        return response()->json($voluntarios);
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

        $voluntarios = Voluntario::create($dados);

        return response()->json($voluntarios);
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $voluntario = Voluntario::find($id);

        return  $voluntario;
    }


    public function edit(string $id)
    {
        $voluntario = Voluntario::find($id);

        return $voluntario;
    }


    public function update(Request $request, string $id)
    {

                $voluntario = Voluntario::find($id);

                $dados = $request->validate([
                    'nome' => 'required|string|max:255',
                    'cpf' => 'required|string|max:11',
                    'email' => 'required|email',
                    'telefone' => 'nullable|string',
                    'areas' => 'nullable|string',
                ]);

                $voluntario->update($dados);

                return response()->json($voluntario);
    }

    public function destroy(string $id)
    {
        $voluntario = Voluntario::find($id);

        $voluntario->delete();

        return response()->json($voluntario);

    }
}
