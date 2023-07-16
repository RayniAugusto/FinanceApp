@extends('layouts.app')

@section('title', 'Editar categoría')

@section('content')

<div class="container">
    <h2>Editar categoría</h2>

    <form method="POST" action="{{ route('categories.update', $category->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $category->description }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>

@endsection