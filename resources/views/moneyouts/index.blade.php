@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Egreso</h1>
            <a href="{{ route('moneyouts.create') }}" class="btn btn-primary">Nuevo</a>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Description</th>
                        <th>Fecha</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($moneyouts as $in)
                        <tr>
                            <td>{{ $in->id }}</td>
                            <td>{{ $in->amount }}</td>
                            <td>{{ $in-> category->description }}</td>
                            <td>{{ $in->description }}</td>
                            <td>{{ $in->date_out}}</td>
                            <td>
                                <a href="{{ route('moneyouts.edit', $in->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('moneyouts.destroy', $in->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
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
