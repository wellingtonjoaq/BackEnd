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
            'cpf' => 'required|string|max:14',
            'email' => 'required|email',
            'telefone' => 'nullable|string',
            'areas' => 'nullable|string',
        ]);

        // $cpf = preg_replace('/\D/', '', $dados['cpf']);

        // if (strlen($cpf) != 11 || preg_match("/^{$cpf[0]}{11}$/", $cpf)) {
        //     return redirect()->back()->withErrors(['cpf' => 'CPF inválido.']);
        // }

        // for ($s = 10, $n = 0, $i = 0; $s >= 2; $n += $cpf[$i++] * $s--);
        // if ($cpf[9] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
        //     return redirect()->back()->withErrors(['cpf' => 'CPF inválido.']);
        // }

        // for ($s = 11, $n = 0, $i = 0; $s >= 2; $n += $cpf[$i++] * $s--);
        // if ($cpf[10] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
        //     return redirect()->back()->withErrors(['cpf' => 'CPF inválido.']);
        // }

        // if (!empty($dados['telefone']) && !preg_match('/^\(\d{2}\)\s?\d{4,5}-\d{4}$/', $dados['telefone'])) {
        //     return redirect()->back()->withErrors(['telefone' => 'Telefone inválido. Use o formato (XX) XXXXX-XXXX ou (XX) XXXX-XXXX.']);
        // }

        $voluntarios = Voluntario::create($dados);

        return response()->json($voluntarios);
    }





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
                    'cpf' => 'required|string|max:14',
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
