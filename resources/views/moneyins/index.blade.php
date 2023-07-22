@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ingreso</h1>
            <a href="{{ route('moneyins.create') }}" class="btn btn-primary">Nuevo ingreso</a>

            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Monto</th>
                        <th>Categoria</th>
                        <th>Descripcion</th>
                        <th>Fecha</th>
                        <th>Action</th>

                    </tr>
                </thead>
                <tbody>
                    @foreach($moneyins as $in)
                        <tr>
                            <td>{{ $in->id }}</td>
                            <td>{{ $in->amount }}</td>
                            <td>{{ $in-> category->description }}</td>
                            <td>{{ $in->description }}</td>
                            <td>{{ $in->date_in}}</td>


                            <td>
                                <a href="{{ route('moneyins.edit', $in->id) }}" class="btn btn-warning">Editar</a>
                                <form action="{{ route('moneyins.destroy', $in->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
                                </form>
                            </td>
                        </tr>

                    @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>
@endsection
