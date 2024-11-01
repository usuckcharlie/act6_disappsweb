@extends('layouts.app')

@section('content')
    <h1>Editar Producto</h1>
    <form method="POST" action="{{ route('productos.update', $producto->id) }}">
        @csrf
        @method('PUT')
        </form>
@endsection