@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
      <h1>Listado de clientes</h1>
      <a href="{{ route('client.create') }}" class="btn btn-primary">Crear clientes</a>
      
      @if (Session::has('mensaje'))
          <div class="alert alert-info my-5">
            {{ Session::get('mensaje') }}
          </div>
      @endif

      <div class="table-responsive">
        <table class="table table-primary">
          <thead>
            <tr>
              <th scope="col">Nombre</th>
              <th scope="col">Saldo</th>
              <th scope="col">Comentario</th>
              <th scope="col">Acción</th>
            </tr>
          </thead>
          <tbody>
            @forelse ($clients as $detail)
              <tr class="">
                <td scope="row">{{ $detail->name }}</td>
                <td>{{ $detail->due }}</td>
                <td>{{ $detail->comments }}</td>
                <td>Editar - Eliminar</td>
              </tr>
            @empty
                <tr>
                  <td colspan="3">No hay registros</td>
                </tr>
            @endforelse

          </tbody>
        </table>
        @if ($clients->count())
          {{ $clients->links() }}  
        @endif
      </div>
      
    </div>

@endsection