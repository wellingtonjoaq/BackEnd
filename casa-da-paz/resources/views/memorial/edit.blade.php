@extends ('app')
@section('title', 'nova Imagem')
@section('content')
    <h1>Nova imagem</h1>
    <form action="{{ route('memorial.update', $memorial) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input value="{{ $memorial->nome }}" type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome">
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
        </div>

        @if($memorial->imagem)
            <div class="mb-3">
                <img
                    src="{{ asset('storage/' . $memorial->imagem) }}"
                    alt="Imagem memorial"
                    class="img-thumbnail" width="150"
                >
            </div>
        @endif

        <div class="mb-3">
            <label for="informacao" class="form-label">informacao Imagem</label>
            <input value="{{ $memorial->informacao }}" type="text" class="form-control" id="informacao" name="informacao" placeholder="Infomação da Imagem">
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>

@endsection

