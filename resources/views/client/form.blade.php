@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">

        @if (isset($client))
            <h1>Editar Clientes</h1>
        @else
            <h1>Crear Clientes</h1>
        @endif

        @if (isset($client))
            <form action="{{ route('client.update', $client) }}" method="post">
                @method('PUT')
        @else
            <form action="{{ route('client.store') }}" method="post">
        @endif
            @csrf
            <div class="mb-3 py-5">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre del cliente" value="{{ old('name') ?? @$client->name }}">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error('name')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="due" class="form-label">Saldo</label>
                <input type="number" name="due" class="form-control" placeholder="Saldo del cliente" value="{{ old('due') ?? @$client->due }}" step="0.01" >
                <p class="form-text">Escriba el saldo del cliente</p>
                @error('due')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comments" class="form-label">Comentarios</label>
                <textarea name="comments" class="form-control" cols="30" rows="4">{{ old('comments') ?? @$client->comments }}</textarea>
                <p class="form-text">Escriba algún comentario</p>
                @error('comments')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            @if (isset($client))
                <a href="{{ route('client.index') }}" class="btn btn-danger">Listado clientes</a>
                <button type="submit" class="btn btn-primary">Editar cliente</button>
            @else
                <a href="{{ route('client.index') }}" class="btn btn-danger">Listado clientes</a>
                <button type="submit" class="btn btn-primary">Guardar cliente</button>
            @endif

        </form>
        
    </div>
@endsection