@extends ('app')
@section('title', 'nova Imagem')
@section('content')
    <h1>Nova imagem</h1>
    <form action="{{ route('galeria.update', $galeria) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input value="{{ $galeria->nome }}" type="text" class="form-control" id="nome" name="nome" placeholder="Nome da imagem">
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
        </div>

        @if($galeria->imagem)
            <div class="mb-3">
                <img
                    src="{{ asset('storage/' . $galeria->imagem) }}"
                    alt="Imagem memorial"
                    class="img-thumbnail" width="150"
                >
            </div>
        @endif

        <div class="mb-3">
            <label for="data" class="form-label">Data do Evento</label>
            <input value="{{ $galeria->data }}" type="text" class="form-control" id="data" name="data">
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>

@endsection

