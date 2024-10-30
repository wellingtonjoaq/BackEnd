@extends ('app')
@section('title', 'Formulario')
@section('content')

    <h1 class="text-center" >Doação</h1>

    <div class="container mt-5">
    <form>
      <div class="row mb-3">
        <div class="col-md-6">
          <label for="nome" class="form-label">Nome Completo *</label>
          <input type="text" class="form-control" id="nome" placeholder="Insira seu nome">
        </div>
        <div class="col-md-6">
          <label for="cpf" class="form-label">CPF *</label>
          <input type="text" class="form-control" id="cpf" placeholder="Seu CPF">
        </div>
      </div>

      <div class="row mb-3">
        <div class="col-md-6">
          <label for="email" class="form-label">E-mail *</label>
          <input type="email" class="form-control" id="email" placeholder="casadapaz@gmail.com">
        </div>

        <div class="col-md-6">
          <label for="telefone" class="form-label">Telefone *</label>
          <input type="tel" class="form-control" id="telefone" placeholder="(44) 9 0000-0000">
        </div>
      </div>

      <div class="row mb-6">
        <div class="col-md-6">
          <label for="doacao'" class="form-label"> O que deseja doar</label>
          <input type="text" class="form-control" id="doacao">
        </div>
    </div>

      <button type="button" class="btn btn-success">Enviar</button>
    </form>

@endsection
