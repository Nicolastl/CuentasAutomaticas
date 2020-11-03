@extends('plantilla')

@section('seccion')

<h1 class="display-4">Notas</h1>
@if(session('mensaje'))
    <div class="alert alert-success">
        {{session('mensaje')}}
    </div>
    @endif
<form action="{{route('notas.crear')}}" method="POST">
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
    <input type="text" placeholder="Nombre" name="nombre" value="{{ old('nombre') }}" class="form-control mb-2">
    <input type="text" placeholder="Descripcion" name="descripcion" value="{{old('descripcion')}}" class="form-control mb-2">
    <button class="btn btn-primary btn-block" type="submit">Agregar</button>
</form>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">#id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripción</th>
            <th scope="col">Acción</th>
        </tr>
        </thead>
        <tbody>

            @foreach($notas as $n)
                <tr>
                    <th scope="row">{{$n->id}}</th>
                    <td>
                        <a href="{{route('notas.detalle',$n)}}">
                        {{$n->nombre}}
                        </a>
                    </td>
                    <td>{{$n->descripcion}}</td>
                    <td>
                        <a href="{{route('notas.editar',$n)}}" class="btn btn-warning btn-sm">Editar</a>
                        <form action="{{ route('notas.eliminar', $n) }}" class="d-inline" method="POST">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach()
        </tbody>
    </table>
{{$notas->links()}}


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

@endsection
