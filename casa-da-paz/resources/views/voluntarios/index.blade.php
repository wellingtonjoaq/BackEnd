@extends ('app')
@section('title', 'Lista de Voluntários')
@section('content')
    <h1>Lista de Voluntários</h1>

    <div class="container mt-5">
      <table class="table">
          <thead>
              <tr>
                  <td>ID</td>
                  <td>Nome</td>
                  <td>CPF</td>
                  <td>E-mail</td>
                  <td>Telefone</td>
                  <td>Área</td>
              </tr>
          </thead>
      </table>
    </div>
    
    
@endsection