@extends('layouts.app')

@section('title', 'Crear nueva categoría')

@section('content')

<div class="container">
    <h2>Crear nueva categoría</h2>

    <form method="POST" action="{{ route('categories.store') }}">
        @csrf

        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>

        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>

@endsection
