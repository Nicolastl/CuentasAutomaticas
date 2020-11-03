@extends('plantilla')
@section('seccion')
    <h1>Registrar cuenta del Agua</h1>
    <form action="{{route('cuentas.crear')}}" method="POST">
        @csrf
        @if(session('mensaje'))
            <div class="alert alert-success">
                {{session('mensaje')}}
            </div>
        @endif
        <?php $f = date('Y').'-'.date('m'); ?>
        <label for="fecha">Fecha: </label>
        <input type="month" id="fecha" name="fecha" value="<?php echo $f; ?>" class="form-control mb-2" required>
        <label for="valor_total">Valor total:</label>
        <input type="number" min="0" placeholder="Valor total" name="valor_total" id="valor_total" value="{{old('valor_total')}}" class="form-control mb-2" required>
        <label for="consumo_total">Consumo total:</label>
        <input type="number" min="0" placeholder="Consumo total" name="consumo_total" id="consumo_total" value="{{old('consumo_total')}}" class="form-control mb-2" required>
        <label for="cargo_fijo">Cargo Fijo:</label>
        <input type="number" min="0" placeholder="Cargo fijo" name="cargo_fijo" id="cargo_fijo" value="{{old('cargo_fijo')}}" class="form-control mb-2" required>
        <label for="valor_unitario">Valor unitario (por Lt):</label>
        <input type="number" min="0" placeholder="Valor unitario (por Lt)" name="valor_unitario" id="valor_unitario" value="{{old('valor_unitario')}}" step="0.01" class="form-control mb-2" required>
        <label for="consumo_casa">Consumo Casa:</label>
        <input type="number" min="0" placeholder="Consumo Casa" name="consumo_casa" id="consumo_casa" value="{{old('consumo_casa')}}" class="form-control mb-2" required>
        <label for="recoleccion">Recolección:</label>
        <input type="number" min="0" placeholder="Recolección" name="recoleccion" id="recoleccion" value="{{old('recoleccion')}}" class="form-control mb-2" required>
        <label for="tratamiento">Tratamiento:</label>
        <input type="number" min="0" placeholder="Tratamiento" name="tratamiento" id="tratamiento" value="{{old('tratamiento')}}" class="form-control mb-2" required>
        <label for="subsidio">Subsidio:</label>
        <input type="number" min="0" placeholder="Subsidio" name="subsidio" id="subsidio" value="{{old('subsidio')}}" class="form-control mb-2" required>
        <label for="otro">Otros:</label>
        <input type="number" name="otro" id="otro" value="0" class="form-control mb-2" required>

        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
@endsection
