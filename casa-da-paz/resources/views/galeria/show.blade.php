@extends('app')
@section('title', 'Detalhes da imagem')
@section('content')
        <div class="card">
            <div class="card-header">
                Detalhes da imagem {{ $galeria->nome }}
            </div>
            <div class="card-body">
                <p><strong>ID:</strong> {{ $galeria->id }}</p>
                <p><strong>Nome:</strong> {{ $galeria->nome }}</p>
                <p><strong>Imagem:</strong></p>
                @if($galeria->imagem)
                    <img
                    src="{{ asset('storage/' . $galeria->imagem) }}"
                    alt="Imagem memorial"
                    class="img-thumbnail" width="150"
                    >
                @endif
                <p><strong>Data do Evento:</strong> {{ $galeria->data }}</p>
                <br>
                <a class="btn btn-success" href="{{ route('galeria.index') }}">Voltar</a>
            </div>
        </div>
@endsection
