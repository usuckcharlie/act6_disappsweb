@extends('layouts.app')

@section('content')
    <h1>Crear Nuevo Producto</h1>
    <form method="POST" action="{{ route('productos.store') }}">
        @csrf
        </form>
@endsection