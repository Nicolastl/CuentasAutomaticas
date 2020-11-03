@extends('plantilla')

@section('seccion')

<h1>Este es el equipo de trabajo</h1>
@foreach($equipo as $item)
    <a href="{{route('nosotros',$item) }}" class="h4 text-danger"> {{$item}}</a><br>
    @endforeach
    @if(!empty($nombre))
        @switch($nombre)
            @case($nombre=='Nico')
            <h2>Usted escogió a {{$nombre}}</h2>
            <p>Esta intentando estudiar, no moleste</p>
            @break
            @case($nombre=='Fer')
            <h2>Usted escogió a {{$nombre}}</h2>
            <p>La más preciosa del mundo mundial uwu!</p>
            @break
            @case($nombre=='Leny')
            <h2>Usted escogió a {{$nombre}}</h2>
            <p>Best friend in the world!</p>
            @break
        @endswitch
    @endif
@endsection
