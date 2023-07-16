@extends('layouts.app')

@section('title', 'Inicio')

@section('content')

<div class="container">
    <h1>Bienvenido a la aplicación FinanceApp</h1>
    <p>
        Gestiona tus finanzas de manera eficiente y efectiva.
    </p>
    <p>
        <a href="{{ url('/moneyins') }}" class="btn btn-primary">Ir a Ingresos</a>
        <a href="{{ url('/moneyouts') }}" class="btn btn-primary">Ir a Egreso</a>
        <a href="{{ url('/categories') }}" class="btn btn-primary">Ir a Categorías</a>
        <a href="{{ url('/') }}" class="btn btn-primary">Ir a Balance</a>
    </p>


</div>

@endsection