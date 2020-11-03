@extends('plantilla')
@section('seccion')
<h1>Blog</h1>
<form action="{{route('datos.crear')}}" method="POST">
@csrf
    @if(session('mensaje'))
        <div class="alert alert-success">
            {{session('mensaje')}}
        </div>
    @endif
    <input type="number" placeholder="Valor" name="valor" value="{{ old('valor') }}" class="form-control mb-2" required>
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
@endsection
