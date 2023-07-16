@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Ingreso</h1>
            <a href="{{ route('moneyins.create') }}" class="btn btn-primary">New</a>
            <table class="table table-bordered mt-4">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Amount</th>
                        <th>Category</th>
                        <th>Description</th>
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
                            <td>
                                <a href="{{ route('moneyins.edit', $in->id) }}" class="btn btn-warning">Edit</a>
                                <form action="{{ route('moneyins.destroy', $in->id) }}" method="POST" style="display:inline;">
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