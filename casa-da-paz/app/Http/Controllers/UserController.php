<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    public function index()
    {
        $user = User::get();
        return response()->json($user);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(string $id)
    {
        //
    }


    public function edit(string $id)
    {
        //
    }


    public function update(Request $request, string $id)
    {

        $user = User::find($id);

        $dados = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email',
            'password' => 'required|password'
        ]);

        $user->update($dados);

        return response()->json($user);
}


    public function destroy(string $id)
    {
        $user = User::find($id);

        $user->delete();

        return response()->json($user);

    }
}
