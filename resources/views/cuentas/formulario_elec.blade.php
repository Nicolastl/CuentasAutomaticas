@extends('plantilla')
@section('seccion')
    <h1>Registrar cuenta Electricidad</h1>
    <form action="{{route('cuentas.crear_elec')}}" method="POST">
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
        <label for="admin">Administración:</label>
        <input type="number" min="0" placeholder="Administración" name="admin" id="admin" value="{{old('admin')}}" class="form-control mb-2" required>
        <label for="electricidad">Electricidad ($):</label>
        <input type="number" min="0" placeholder="Electricidad ($)" name="electricidad" id="electricidad" value="{{old('electricidad')}}" class="form-control mb-2" required>
        <label for="kwhtotal">Electricidad (KWh):</label>
        <input type="number" min="0" placeholder="Electricidad (KWh)" name="kwhtotal" id="kwhtotal" value="{{old('kwhtotal')}}" class="form-control mb-2" required>
        <label for="consumo_casa">Consumo Casa(KWh):</label>
        <input type="number" min="0" placeholder="Consumo Casa (KWh)" name="consumo_casa" id="consumo_casa" value="{{old('consumo_casa')}}" class="form-control mb-2" required>
        <label for="coordinacion">Coordinación:</label>
        <input type="number" min="0" placeholder="Coordinación" name="coordinacion" id="coordinacion" value="{{old('coordinacion')}}" class="form-control mb-2" required>
        <label for="otro">Otros:</label>
        <input type="number" name="otro" id="otro" value="0" class="form-control mb-2" required>

        <button class="btn btn-primary btn-block" type="submit">Agregar</button>
    </form>
@endsection
