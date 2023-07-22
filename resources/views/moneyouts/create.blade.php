@extends('layouts.app')

@section('title', 'Crear nuevo ingreso')

@section('content')

<div class="container">
    <h2>Crear nuevo egreso</h2>

    <form method="POST" action="{{ route('moneyouts.store') }}">
        @csrf

        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" class="form-control" id="description" name="description" required>
        </div>
        <div class="form-group">
            <label for="amount">Monto</label>
            <input type="text" class="form-control" id="amount" name="amount" required>
        </div>
        <div class="form-group">
            <label for="category_id">Categoria</label>
            {{-- <input type="text" class="form-control" id="category_id" name="category_id" required> --}}
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}">{{ $category->description }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Crear</button>
    </form>
</div>

@endsection