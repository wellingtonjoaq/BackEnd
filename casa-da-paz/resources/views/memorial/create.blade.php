@extends ('app')
@section('title', 'Formulario')
@section('content')
    <h1>Formulario</h1>

    <form action="{{ route('memorial.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite seu Nome">
        </div>

        <div class="mb-3">
            <label for="imagem" class="form-label">Imagem</label>
            <input type="file" class="form-control" id="imagem" name="imagem" accept="image/*">
        </div>

        <div class="mb-3">
            <label for="informacao" class="form-label">Informação</label>
            <input type="text" class="form-control" id="informacao" name="informacao" placeholder="Informação da Imagem">
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>

@endsection
