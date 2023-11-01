@extends('theme.base')

@section('content')

    <div class="container py-5 text-center">
      <h1>Crear clientes</h1>

        <form action="{{ route('client.store') }}" method="post">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nombre</label>
                <input type="text" name="name" class="form-control" placeholder="Nombre del cliente">
                <p class="form-text">Escriba el nombre del cliente</p>
                @error('name')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="due" class="form-label">Saldo</label>
                <input type="number" name="due" class="form-control" placeholder="Saldo del cliente" step="0.01">
                <p class="form-text">Escriba el saldo del cliente</p>
                @error('due')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="comments" class="form-label">Comentarios</label>
                <textarea name="comments" class="form-control" cols="30" rows="4" ></textarea>
                <p class="form-text">Escriba algun comentario</p>
                @error('comments')
                    <p class="form-text text-danger">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Guardar cliente</button>

        </form>

    </div>

@endsection