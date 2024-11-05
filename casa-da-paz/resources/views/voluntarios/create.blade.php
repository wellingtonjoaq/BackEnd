@extends('app')
@section('title', 'Formulario')
@section('content')
    <h1>Formulario</h1>
    <form action="{{ route('voluntarios.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="container mt-5">
            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="nome" class="form-label">Nome Completo *</label>
                    <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome" required>
                </div>
                <div class="col-md-6">
                    <label for="cpf" class="form-label">CPF *</label>
                    <input type="text" class="form-control" id="cpf" name="cpf" placeholder="Seu CPF" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label for="email" class="form-label">E-mail *</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="casadapaz@gmail.com" required>
                </div>
                <div class="col-md-6">
                    <label for="telefone" class="form-label">Telefone *</label>
                    <input type="tel" class="form-control" id="telefone" name="telefone" placeholder="(44) 9 0000-0000" required>
                </div>
            </div>

            <div class="mb-3">
                <label for="areas" class="form-label">Áreas</label>
                <select class="form-select" id="areas" name="areas">
                    <option selected disabled>Selecione uma área</option>
                    <option value="1">Audiovisual</option>
                    <option value="2">Marketing</option>
                    <option value="3">Programador Web designer</option>
                    <option value="4">Captador de recursos</option>
                    <option value="5">Oficineiro</option>
                    <option value="6">Auxiliar de bazar</option>
                    <option value="7">Atividades com as crianças</option>
                    <option value="8">Palestrante</option>
                    <option value="9">Promoções e Eventos</option>
                </select>
            </div>

            <button class="btn btn-success" type="submit">Enviar</button>
        </div>
    </form>
@endsection
