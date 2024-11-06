@extends('app')
@section('title', 'Detalhes do Memorial')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes da imagem {{ $memorial->nome }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $memorial->id }}</p>
                <p><strong>Nome:</strong> {{ $memorial->nome }}</p>
                <p><strong>Imagem:</strong></p>
                @if($memorial->imagem)
                    <img
                    src="{{ asset('storage/' . $memorial->imagem) }}"
                    alt="Imagem memorial"
                    class="img-thumbnail" width="150"
                    >
                @endif
                <p><strong>Informação:</strong> {{ $memorial->informacao }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('memorial.index') }}">Voltar</a>
            </div>
        </div>
@endsection
