@extends('layouts.app')

@section('content')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    <div class="container">
        <div class="row justify-content-center">
            @guest
                <div class="col-4">
                    <h1>Hola!</h1>
                    <p>Gestiona tus finanzas de manera eficiente y efectiva.</p>
                </div>
                <div class="col-6">
                    <img id="bg" class="img-fluid" src="{{ asset('images/fondo.jpg') }}">
                </div>
            @endguest
            @auth
                <div class="col-4">
                    <h1>Bienvenido a la aplicación FinanceApp</h1>
                    <p>Gestiona tus finanzas de manera eficiente y efectiva.</p>
                </div>
                <div class="col-6">
                    <img id="bg" class="img-fluid" src="{{ asset('images/fondo.jpg') }}">
                </div>
            @endauth

        </div>
    </div>

@endsection
