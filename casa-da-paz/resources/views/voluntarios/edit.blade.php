@extends('app')
@section('title', 'Editar Voluntário')
@section('content')
    <h1>Editar Voluntário</h1>
    <form action="{{ route('voluntarios.update', $voluntario) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="nome" class="form-label">Nome</label>
            <input value="{{ $voluntario->nome }}" type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome" required>
        </div>

        <div class="mb-3">
            <label for="cpf" class="form-label">CPF</label>
            <input value="{{ $voluntario->cpf }}" type="text" class="form-control" id="cpf" name="cpf" placeholder="Digite o CPF" required>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">E-mail</label>
            <input value="{{ $voluntario->email }}" type="email" class="form-control" id="email" name="email" placeholder="Digite o e-mail" required>
        </div>

        <div class="mb-3">
            <label for="telefone" class="form-label">Telefone</label>
            <input value="{{ $voluntario->telefone }}" type="tel" class="form-control" id="telefone" name="telefone" placeholder="Digite o telefone" required>
        </div>

        <div class="mb-3">
            <label for="areas" class="form-label">Área</label>
            <select class="form-select" id="areas" name="areas" required>
                <option value="">Selecione uma área</option>
                <option value="Audiovisual" {{ $voluntario->areas == 'Audiovisual' ? 'selected' : '' }}>Audiovisual</option>
                <option value="Marketing" {{ $voluntario->areas == 'Marketing' ? 'selected' : '' }}>Marketing</option>
                <option value="Programador Web designer" {{ $voluntario->areas == 'Programador Web designer' ? 'selected' : '' }}>Programador Web designer</option>
                <option value="Captador de recursos" {{ $voluntario->areas == 'Captador de recursos' ? 'selected' : '' }}>Captador de recursos</option>
                <option value="Oficineiro" {{ $voluntario->areas == 'Oficineiro' ? 'selected' : '' }}>Oficineiro</option>
                <option value="Auxiliar de bazar" {{ $voluntario->areas == 'Auxiliar de bazar' ? 'selected' : '' }}>Auxiliar de bazar</option>
                <option value="Atividades com as crianças" {{ $voluntario->areas == 'Atividades com as crianças' ? 'selected' : '' }}>Atividades com as crianças</option>
                <option value="Palestrante" {{ $voluntario->areas == 'Palestrante' ? 'selected' : '' }}>Palestrante</option>
                <option value="Promoções e Eventos" {{ $voluntario->areas == 'Promoções e Eventos' ? 'selected' : '' }}>Promoções e Eventos</option>
            </select>
        </div>

        <button class="btn btn-success" type="submit">Enviar</button>
    </form>
@endsection
