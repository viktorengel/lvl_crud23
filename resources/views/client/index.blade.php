@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
      <h1>Listado de clientes</h1>
      <a href="{{ route('client.index') }}" class="btn btn-primary">Crear clientes</a>
      
      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Saldo</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            <tr class="">
              <td scope="row">EcuaFix</td>
              <td>17.25</td>
              <td>Editar - Eliminar</td>
            </tr>
            <tr class="">
              <td scope="row">EcuaSys</td>
              <td>22.45</td>
              <td>Editar - Eliminar</td>
            </tr>
          </tbody>
        </table>
      </div>
      
    </div>

@endsection