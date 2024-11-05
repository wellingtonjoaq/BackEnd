@extends ('app')
@section('title', 'lista de imagens')
@section('content')
    <h1>Lista de imagens</h1>
    <table class="table">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Nome</td>
                    <td>Imagem</td>
                    <td>Informação</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($memorials as $memorial)
                    <tr>
                        <td>{{ $memorial->id }}</td>
                        <td>{{ $memorial->nome }} </td>
                        <td>
                            @if($memorial->imagem)
                                    <img
                                    src="{{ asset('storage/' . $memorial->imagem) }}"
                                    alt="Imagem memorial"
                                    class="img-thumbnail" width="150"
                                    >
                            @endif
                        </td>
                        <td>{{ $memorial->informacao }}</td>
                        <td>

                            <a class="btn btn-success" href="{{ route('memorial.show', $memorial) }}">
                                Dados
                            </a>

                            <br>

                            <a class="btn btn-primary" href="{{ route('memorial.edit', $memorial) }}">
                                Atualizar
                            </a>

                            <br>

                            <form
                                action="{{ route('memorial.destroy', $memorial) }}"
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

        <a class="btn btn-success" href="{{ route('memorial.create') }}">Novo</a>
@endsection
