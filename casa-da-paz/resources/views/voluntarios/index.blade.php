@extends('app')
@section('title', 'Lista de Voluntários')
@section('content')
    <h1>Lista de Voluntários</h1>

    <div class="container mt-5">
        <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>CPF</td>
                    <td>E-mail</td>
                    <td>Telefone</td>
                    <td>Área</td>
                    <td>Ações</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($voluntarios as $voluntario)
                    <tr>
                        <td>{{ $voluntario->id }}</td>
                        <td>
                            <a href="{{ route('voluntarios.show', $voluntario) }}">
                                {{ $voluntario->nome }}
                            </a>
                        </td>
                        <td>{{ $voluntario->cpf }}</td>
                        <td>{{ $voluntario->email }}</td>
                        <td>{{ $voluntario->telefone }}</td>
                        <td>{{ $voluntario->areas }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('voluntarios.edit', $voluntario) }}">
                                Atualizar
                            </a>
                            <form action="{{ route('voluntarios.destroy', $voluntario) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button
                                    class="btn btn-danger"
                                    type="submit"
                                    onclick="return confirm('Tem certeza que deseja apagar?')"
                                >
                                    Apagar
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <a class="btn btn-success" href="{{ route('voluntarios.create') }}">Novo Voluntario</a>
    
@endsection
