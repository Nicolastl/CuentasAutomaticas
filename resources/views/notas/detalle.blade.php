@extends('plantilla')

@section('seccion')

    <h1>Detalle de Nota {{$nota->id}}:</h1>
    <h4>Nombre: {{$nota->nombre}}</h4>
    <h4>Detalle: {{$nota->descripcion}}</h4>
@endsection
