@extends('layout')

@section('content')

    <h1>Usuarios</h1>
    <ul>
        @if (! empty($users))
            @foreach ($users as $user)
                <li>{{ $user }}</li>
            @endforeach
        @else
            <p>No hay usuarios registrados</p>
        @endif
    </ul>
@endsection

@section('sidebar')
    @parent
    <h2>Barra test</h2>
@endsection

@section('title', 'Usuarios')
