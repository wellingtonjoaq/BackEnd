@extends('app')
@section('title', 'Detalhe do Voluntario')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes do voluntarios {{ $voluntario->nome }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $voluntario->id }}</p>
                <p><strong>Nome:</strong> {{ $voluntario->nome }}</p>
                <p><strong>CPF:</strong> {{ $voluntario->cpf }}</p>
                <p><strong>E-mail:</strong> {{ $voluntario->email }}</p>
                <p><strong>Telefone:</strong> {{ $voluntario->telefone }}</p>
                <p><strong>Áreas:</strong> {{ $voluntario->areas }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('voluntarios.index') }}">Voltar</a>
            </div>
        </div>
@endsection
