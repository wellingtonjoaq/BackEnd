@extends ('app')
@section('title', 'lista galeria')
@section('content')
    <h1>Galeria</h1>
    <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Imagem</td>
                    <td>Data</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($galerias as $galeria)
                    <tr>
                        <td>{{ $galeria->id }}</td>
                        <td>{{ $galeria->nome }} </td>
                        <td>
                            @if($galeria->imagem)
                                    <img
                                    src="{{ asset('storage/' . $galeria->imagem) }}"
                                    alt="Imagem memorial"
                                    class="img-thumbnail" width="150"
                                    >
                            @endif
                        </td>
                        <td>{{ $galeria->data }}</td>
                        <td>

                            <br>

                            <a class="btn btn-success" href="{{ route('galeria.show', $galeria) }}">
                                Dados
                            </a>

                            <br>
                            <br>

                            <a class="btn btn-primary" href="{{ route('galeria.edit', $galeria) }}">
                                Atualizar
                            </a>

                            <br>
                            <br>

                            <form
                                action="{{ route('galeria.destroy', $galeria) }}"
                                method="POST"
                                >
                                    @csrf
                                    @method('DELETE')
                                    <button
                                        class="btn btn-danger"
                                        type="submit"
                                        onclick="return confirm('Tem certexa que deseja apagar?')"
                                    >
                                        apagar
                                    </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <a class="btn btn-success" href="{{ route('galeria.create') }}">Novo</a>
@endsection
