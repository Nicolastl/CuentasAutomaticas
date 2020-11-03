@extends('plantilla')

@section('seccion')
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    <h1>Editar Nota {{$nota->id}}</h1>
    <form action="{{route('notas.update', $nota->id)}}" method="POST">
        @method('PUT')
        @csrf
        @error('nombre')
        <div class="alert alert-danger">
            El nombre es obligatorio
        </div>
        @enderror
        @error('descripcion')
        <div class="alert alert-danger">
            Descripcion es obligatorio
        </div>
        @enderror
        <input type="text" placeholder="Nombre" name="nombre" value="{{ $nota->nombre }}" class="form-control mb-2">
        <input type="text" placeholder="Descripcion" name="descripcion" value="{{$nota->descripcion}}" class="form-control mb-2">
        <button class="btn btn-warning btn-block" type="submit">Guardar</button>
    </form>
@endsection
