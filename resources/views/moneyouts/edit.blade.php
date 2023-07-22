@extends('layouts.app')

@section('title', 'Editar ingreso')

@section('content')

<div class="container">
    <h2>Editar Egreso</h2>

    <form method="POST" action="{{ route('moneyouts.update', $moneyout->id) }}">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="description">Descripción</label>
            <input type="text" class="form-control" id="description" name="description" value="{{ $moneyout->description }}" required>
        </div>
        <div class="form-group">
            <label for="amount">Monto</label>
            <input type="text" class="form-control" id="amount" name="amount" value="{{ $moneyout->amount }}" required>
        </div>
        <div class="form-group">
            <label for="category_id">Categoria</label>
            <select class="form-control" id="category_id" name="category_id" required>
                @foreach($categories as $category)
                    <option value="{{ $category->id }}" {{ $moneyout->category_id == $category->id ? 'selected' : '' }}>
                        {{ $category->description }}
                    </option>
                @endforeach
            </select>
        </div>
        

        <button type="submit" class="btn btn-primary">Guardar cambios</button>
    </form>
</div>

@endsection