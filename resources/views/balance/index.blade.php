@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Balance</h1>
                <table class="table table-bordered mt-4">
                    <thead>
                    <tr>
                        <th>Fecha</th>
                        <th>Tipo</th>
                        <th>Descripcion</th>
                        <th>Monto</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($balance as $item)
                        <tr>
                            <td>{{ $item['date'] }}</td>
                            <td>{{ $item['tipo'] }}</td>
                            <td>{{ $item['description'] }}</td>
                            <td>{{ $item['amount'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
