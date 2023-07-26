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
                            <td class="{{ $item['transaction_type'] == 'In' ? 'text-success' : 'text-danger' }}">{{ $item['created_at'] }}</td>
                            <td class="{{ $item['transaction_type'] == 'In' ? 'text-success' : 'text-danger' }}">{{ $item['transaction_type'] }}</td>
                            <td class="{{ $item['transaction_type'] == 'In' ? 'text-success' : 'text-danger' }}">{{ $item['description'] }}</td>
                            <td class="{{ $item['transaction_type'] == 'In' ? 'text-success' : 'text-danger' }}">{{ $item['amount'] }}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        <div class="row justify-content-end">
            <div class="col-2 text-right">
                <h1>Total: {{ $total }}</h1>
            </div>
        </div>
    </div>
@endsection
