@extends('layouts.app')

@section('content')
    <h1>{{ $vehiculos->id }}</h1>
    <p>{{ $vehiculos->marca }}</p>
    <a href="{{ route('vehiculos.index') }}">Volver a la lista</a>
@endsection